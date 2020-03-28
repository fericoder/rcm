<?php

namespace App\Http\Controllers\Dashboard;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;

class TicketController extends \App\Http\Controllers\Controller
{
    public function index()
    {

        if( \Auth::user()->can('boardMember') OR \Auth::user()->can('admin') ){
            $tickets = Ticket::where('complex_id', \Auth::user()->complex_id)->get();
            return view('dashboard.tickets.index', compact('tickets'));
            exit;
        }else{
            $tickets = Ticket::where('addedById', \Auth::user()->id)->get();
            return view('dashboard.tickets.index', compact('tickets'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketRequest $request)
    {

        if ($request->file('attachment')) {
            $attachmentFile = $request->file('attachment');
            $attachmentFileName = time() . "_" . $attachmentFile->getClientOriginalName();
            $attachmentFile->move('storage/tickets', $attachmentFileName);
        } else {
            $attachmentFileName = "Nothing";
        }

        Ticket::create([
            'title' => $request->title,
            'description' => $request->description,
            'requestedFrom' => $request->requestedFrom,
            'addedById' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
            'addedByName' => \Auth::user()->fullName,
            'scope' => $request->scope,
            'status' => 'بررسی نشده',
            'attachment' => 'storage/Tickets/' . $attachmentFileName,
        ]);

        alert()->success('درخواست با موفقیت ثبت شد', 'ثبت شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket $Ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $Ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket $Ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        if( !\Auth::user()->can('boardMember') AND $Ticket->addedById != \Auth::user()->id){
            return redirect()->back();
            exit;
        }else{
            return view('dashboard.tickets.edit', compact('ticket'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Ticket $Ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $Ticket)
    {

        if ($request->file('attachment')) {
            $attachmentFile = $request->file('attachment');
            $attachmentFileName = time() . "_" . $attachmentFile->getClientOriginalName();
            $attachmentFile->move('storage/tickets', $attachmentFileName);

            $Ticket->title = $request->title;
            $Ticket->description = $request->description;
            $Ticket->requestedFrom = $request->requestedFrom;
            $Ticket->scope = $request->scope;
            $Ticket->status = $request->status;
            $Ticket->attachment = 'storage/tickets/' . $attachmentFileName;
            $Ticket->doerDescription = $request->doerDescription;
            $Ticket->doerfullName = \Auth::user()->fullName;
            $Ticket->doerUserId = \Auth::user()->id;
            $Ticket->save();

        } else {
            $Ticket->title = $request->title;
            $Ticket->description = $request->description;
            $Ticket->requestedFrom = $request->requestedFrom;
            $Ticket->scope = $request->scope;
            $Ticket->status = $request->status;
            $Ticket->doerDescription = $request->doerDescription;
            $Ticket->doerfullName = \Auth::user()->fullName;
            $Ticket->doerUserId = \Auth::user()->id;
            $Ticket->save();
        }



        alert()->success('درخواست با موفقیت بروز شد', 'بروز شد');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket $Ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $Ticket)
    {
        //
    }

    public function approve(Request $request)
    {
        $ticket = Ticket::find($request->ticket_id);
        if ($ticket->addedById == \Auth::user()->id){
            $ticket->update(['status' => 'تایید شده']);
            alert()->success('درخواست باموفقیت تایید شد', 'تایید شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }
    }
}
