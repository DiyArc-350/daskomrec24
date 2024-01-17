<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRolesRequest;
use App\Http\Requests\UpdateRolesRequest;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::all();
        $data = [
            'title' => 'Role List',
            'roles' => $roles
        ];
        return view('admin.roleList', $data);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'roleName' => 'required',
            'desc' => 'required',
            'character_photo' => 'required',
            'profilepic'=> 'required'
        ]);

        Roles::where('id', $id)->update([
            'roleName' => $request->roleName,
            'desc' => $request->desc,
            'character_photo' => $request->character_photo,
            'profilepic' => $request->profilepic,
            'updated_at' => now()
        ]);
        return redirect()->route('admin.role')->with('success', 'Role Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $roles)
    {
        //
    }
}
