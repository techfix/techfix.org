<?php

namespace App\Http\Controllers;

use App\Issue;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\CreateIssueRequest;

class IssueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::orderBy('updated_at', 'desc')->get();

        return view('issue.index')->with([
            'issues' => $issues
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('issue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateIssueRequest $request)
    {
        $issue = Issue::create([
            'uuid' => Str::uuid(),
            'title' => $request->title,
            'issue' => $request->issue,
            'issueable_id' => auth()->user()->id,
            'issueable_type' => 'App\User',
        ]);

        return redirect()->route('issues.index')->with('status', 'Your issue was successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        return view('issue.show')->with([
            'issue' => $issue
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        //
    }
}
