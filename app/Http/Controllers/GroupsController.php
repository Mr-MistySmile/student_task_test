<?php
namespace App\Http\Controllers;
use App\Groups;
use Illuminate\Http\Request;
class GroupsController extends Controller
{
    public function index(Request $request)
    {
        $groups = Groups::all();
        return view('groups.index', compact('groups'));
    }
    public function create(Request $request)
    {
        // $group = new Groups();
        // $this->authorize('create', $group);
        return view('groups.create');
    }
    public function store(Request $request)
    {
        Groups::create($request->all());
        return redirect(route('groups.index'));
    }
    public function show(Groups $group, Request $request)
    {
        return view('groups.show', compact('group'));
    }
    public function edit(Groups $group, Request $request)
    {
        $group->update($request->all());
        return redirect(route('groups.index'));
    }
    public function update(Request $request)
    {
    }
    public function destroy(Groups $group, Request $request)
    {
        $group->delete();
        return redirect(route('groups.index'));
    }
}