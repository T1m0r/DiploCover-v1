@extends('layouts.appemp')
@section('head')
    <style>
        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);}
        .container:hover .middle {
            opacity: 1;}
        .text {
            background-color: #4CAF50;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            padding: auto;}
        #Teamname{
            font-size: 40px}
        #DasTeam{
            background-color: lightgrey;
            width: auto;
            border: 300px;
            padding: 25px;
            margin: 25px;}
        #Idea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;}
    </style>
@endsection
@section('content')
    <div class="col-sm-1 container-fluid"></div>
    <div class="col-sm-7 container-fluid"><br/>
        <div class="center"><h1>Name des Teams</h1></div><br/>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading">Team Overview</div>
            <div class="panel-body">
                <div class="row container-fluid"><table id="Klasse"style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Klasse</th>
                            <th>Rolle</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Max Musterman</td>
                            <td>XYZ</td>
                            <td>Nerd</td>
                            <td><button style="width:100%" title="Profilepage" type="button" class="Profilebutton btn btn-default btn-lg btn-block">
                                    <i class="fa fa-user" style="color:black"></i></td>
                        </tr>
                        <tr>
                            <td>Max Musterman</td>
                            <td>XYZ</td>
                            <td>SchÃ¼lersprecher</td>
                            <td><button style="width:100%" title="Profilepage" type="button" class="Profilebutton btn btn-default btn-lg btn-block">
                                    <i class="fa fa-user" style="color:black"></i></td>
                        </tr>
                        </tbody>
                    </table></div>
            </div>
        </div>
        <div id="Schatten"class="panel-group">
            <div class="panel-heading"><h4>Contact Info<h4></div>
            <div class="panel-body">
                <div class="ContactInfo">
                    <form action="/action_page.php">
                        <label class="fa fa-envelope" for="E-Mail"> E-Mail:</label>
                        <p>info@diplocover.at</p>
                    </form>
                </div>
            </div>
        </div><br/>
    <div id="DasTeam"class="row">
        <div class="container-fluid bg-3 text-center">
            <div id="Teamname"class="Team">{{$tm->tname}}</div>
        </div>
        <div class="container-fluid bg-3 text-center">
            <div id="Bild1" class="col-sm-4 container">
                <img src="{{asset($tms[0]->stprof->profpic)}}" alt="Avatar" class="img-circle">
                <div class="middle">
                    <div class="text">{{$tms[0]->name}}</div>
                </div>
            </div>
            @if(isset($tms[1]))
                <div id="Bild2" class="col-sm-4 container">
                    <img src="{{asset($tms[1]->stprof->profpic)}}" alt="Avatar" class="img-circle" >
                    <div class="middle">
                        <div class="text">{{$tms[1]->name}}</div>
                    </div>
                </div>
            @endif
            @if(isset($tms[2]))
                <div id="Bild3" class="col-sm-4 container">
                    <img src="{{asset($tms[2]->stprof->profpic)}}avatar.png" alt="Avatar" class="img-circle" >
                    <div class="middle">
                        <div class="text">{{$tms[2]->name}}</div>
                    </div>
                </div>
            @endif
        </div>
        <div class="container-fluid bg-3 text-center">
            @if(isset($tms[3]))
                <div id="Bild3" class="col-sm-6 container">
                    <img src="{{asset($tms[3]->stprof->profpic)}}" alt="Avatar" class="img-circle" >
                    <div class="middle">
                        <div class="text">{{$tms[3]->name}}</div>
                    </div>
                </div>
            @endif
            @if(isset($tms[4]))
                <div id="Bild3" class="col-sm-6 container">
                    <img src="{{asset($tms[4]->stprof->profpic)}}" alt="Avatar" class="img-circle" >
                    <div class="middle">
                        <div class="text">{{$tms[4]->name}}</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <p id=Idea> Ich bin eine Idee</p>
@endsection
