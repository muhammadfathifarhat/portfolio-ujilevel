<?php

namespace App\Http\Controllers;

use App\Models\AuthorDetail;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
    }

    public function login(Request $req)
    {
        $validate = $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            return Redirect::route('admin')->with('inputSuccess', 'Login Berhasil');;
        }

        return redirect()->back()->withErrors(
            ['loginError' => 'Username atau Password anda salah!']
        );
    }

    public function index()
    {
        return view('admin.index');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $req)
    {
        $validate = $req->validate([
            'username' => 'required|max:20',
            'name' => 'required|max:100',
        ]);

        $user = User::find(1);

        if ($req->password == NULL && $req->photo == NULL) {
            $user->update($validate);
        } elseif ($req->password != NULL && $req->photo == NULL) {
            $user->update([
                'username' => $req->username,
                'password' => $req->password,
                'name' => $req->name,
            ]);
        } elseif ($req->photo != NULL && $req->password == NULL) {
            Storage::delete($user->photo);
            $filename = $req->file('photo')->store('photo', 'public');
            $user->update([
                'username' => $req->username,
                'name' => $req->name,
                'photo' => $filename,
            ]);
        } else {
            Storage::delete($user->photo);
            $filename = $req->file('photo')->store('photo', 'public');
            $user->update([
                'username' => $req->username,
                'name' => $req->name,
                'password' => $req->password,
                'photo' => $filename,
            ]);
        }

        return redirect()->back()->with('inputSuccess', 'Data telah berhasil disimpan');;
    }

    public function profiledtl()
    {
        return view('admin.detail');
    }

    public function updateprofiledtl(Request $req)
    {
        $validate = $req->validate(
            [
                'short_description' => 'required|max:100',
                'about' => 'required|max:255',
                'location' => 'required|max:50',
                'website_url' => 'required|max:100',
                'website_domain' => 'required|max:100',
                'instagram_url' => 'required|max:100',
                'instagram_id' => 'required|max:100',
                'email_url' => 'required|max:100',
                'email_address' => 'required|email|max:100',
            ]
        );

        $user = AuthorDetail::find(1);

        $user->update($validate);

        return redirect()->back()->with('inputSuccess', 'Data telah berhasil disimpan');;
    }

    public function projects()
    {
        $project = Project::all();
        return view('admin.project', compact('project'));
    }

    public function inputProjects()
    {
        return view('admin.inputproject');
    }

    public function storeProject(Request $req)
    {
        $media = [];

        $validate = $req->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'category' => 'required|max:20',
            'start_date' => 'required',
            'finish_date' => 'required',
            'foto.*' => 'required|mimetypes:image/jpeg,image/png,image/gif,video/mp4,video/avi|max:20800'
        ]);

        $project = Project::create([
            'name' => $req->name,
            'description' => $req->description,
            'category' => $req->category,
            'start_date' => $req->start_date,
            'finish_date' => $req->finish_date
        ]);

        foreach ($req->file('foto') as $foto) {
            $filename = $foto->store('thumbnail', 'public');
            $mime = $foto->getMimeType();
            $media[] = [
                'project_id' => $project->id,
                'type' => (str_contains($mime, 'image') ? 'Image' : 'Video'),
                'file' => $filename
            ];
        }

        ProjectImage::insert($media);

        return redirect()->route('projects')->with('inputSuccess', 'Data telah berhasil disimpan');;
    }

    public function editProject($id)
    {
        $project = Project::find($id);
        return view('admin.editproject', compact('project'));
    }

    public function updateProject($id, Request $req)
    {
        $media = [];

        $validate = $req->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'category' => 'required|max:20',
            'start_date' => 'required',
            'finish_date' => 'required',
            'foto.*' => 'mimetypes:image/jpeg,image/png,image/gif,video/mp4,video/avi|max:20800'
        ]);

        $project = Project::find($id);

        $project->update([
            'name' => $req->name,
            'description' => $req->description,
            'category' => $req->category,
            'start_date' => $req->start_date,
            'finish_date' => $req->finish_date
        ]);

        if ($req->has('foto')) {
            foreach ($req->file('foto') as $foto) {
                $filename = $foto->store('thumbnail', 'public');
                $mime = $foto->getMimeType();
                $media[] = [
                    'project_id' => $project->id,
                    'type' => (str_contains($mime, 'image') ? 'Image' : 'Video'),
                    'file' => $filename
                ];
            }
        }

        foreach($req->removed_img as $removed){
            $file = ProjectImage::find($removed);
            if(Storage::disk('public')->exists($file->file)){
                Storage::disk('public')->delete($file->file);
            }
            $file->delete();
        }


        ProjectImage::insert($media);
        return redirect()->route('projects')->with('inputSuccess', 'Data telah berhasil disimpan');;
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);

        foreach($project->images as $file){
            if(Storage::disk('public')->exists($file->file)){
                Storage::disk('public')->delete($file->file);
            }
            $file->delete();
        }

        $project->delete();

        return redirect()->route('projects')->with('inputSuccess', 'Data telah berhasil dihapus');;
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/admin');
    }
}
