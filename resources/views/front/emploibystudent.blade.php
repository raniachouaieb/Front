
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>
<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .header {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #2d3280;
        color: white;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}


</style>
@include('includes.sidebar')
<div class="wrapper-inline">
    <!-- Header area start -->
    <header> <!-- extra class no-background -->
        <a class="go-back-link" href="{{route('getEnfant')}}"><i class="fa fa-arrow-left"></i></a>
        <h1 class="page-title">Emploi du temps</h1>
        <div class="navi-menu-button">
            <em></em>
            <em></em>
            <em></em>
        </div>
    </header>

    <div>
        <div class="section-head">
            <h4 class="title-main">Liste des emplois</h4>

        </div>


        <div class="clear"></div>
@include('includes.alerts.flash')
        <section class="container">
            @if($emplois && $emplois->count()>0)
            @foreach ($emplois as $emp)
            <table id="customers" border="5" cellspacing="0" align="center">
                <tr>
                    <td class="header"  align="center" height="50">
                        <b>{{ __('Monday')}}</b>
                    </td>

                    @foreach(json_decode($emp->monday, true) as $member)
                        <td align="center" height="50">
                            <div class="row">
                                <div class="col-md-6"><b>{{ $member['from'] }}</b></div>
                                <div class="col-md-6"><b>{{ $member['to'] }}</b></div>
                                <div class="col-md-12">
                                    {{ $member['name'] }}
                                </div>
                            </div>

                        </td>
                    @endforeach
                    @for ($i =$size[0]; $i < max($size); $i++)
                        <td align="center" height="50">
                        </td>
                    @endfor

                </tr>
                <tr>
                    <td class="header"  align="center" height="50">
                        <b> {{ __('Tuesday')}}</b>
                    </td>
                    @foreach(json_decode($emp->tuesday, true) as $member)
                        <td align="center" height="50">
                            <div class="row">
                                <div class="col-md-6"><b>{{ $member['from'] }}</b></div>
                                <div class="col-md-6"><b>{{ $member['to'] }}</b></div>
                                <div class="col-md-12">
                                    {{ $member['name'] }}
                                </div>
                            </div>

                        </td>
                    @endforeach
                    @for ($i =$size[1]; $i < max($size); $i++)
                        <td align="center" height="50">
                        </td>
                    @endfor
                </tr>
                <tr>
                    <td class="header"  align="center" height="50">
                        <b> {{ __('Wednesday')}}</b>
                    </td>
                    @foreach(json_decode($emp->wednesday, true) as $member)
                        <td align="center" height="50">
                            <div class="row">
                                <div class="col-md-6"><b>{{ $member['from'] }}</b></div>
                                <div class="col-md-6"><b>{{ $member['to'] }}</b></div>
                                <div class="col-md-12">
                                    {{ $member['name'] }}
                                </div>
                            </div>

                        </td>
                    @endforeach
                    @for ($i =$size[2]; $i < max($size); $i++)
                        <td align="center" height="50">
                        </td>
                    @endfor
                </tr>
                <tr>
                    <td class="header"  align="center" height="50">
                        <b> {{ __('Thursday')}}</b>
                    </td>
                    @foreach(json_decode($emp->thursday, true) as $member)
                        <td align="center" height="50">
                            <div class="row">
                                <div class="col-md-6"><b>{{ $member['from'] }}</b></div>
                                <div class="col-md-6"><b>{{ $member['to'] }}</b></div>
                                <div class="col-md-12">
                                    {{ $member['name'] }}
                                </div>
                            </div>

                        </td>
                    @endforeach
                    @for ($i =$size[3]; $i < max($size); $i++)
                        <td align="center" height="50">
                        </td>
                    @endfor
                </tr>
                <tr>
                    <td class="header"  align="center" height="50">
                        <b> {{ __('Friday')}}</b>
                    </td>

                    @foreach(json_decode($emp->friday, true) as $member)
                        <td align="center" height="50">
                            <div class="row">
                                <div class="col-md-6"><b>{{ $member['from'] }}</b></div>
                                <div class="col-md-6"><b>{{ $member['to'] }}</b></div>
                                <div class="col-md-12">
                                    {{ $member['name'] }}
                                </div>
                            </div>

                        </td>
                    @endforeach
                    @for ($i =$size[4]; $i < max($size); $i++)
                        <td align="center" height="50">
                        </td>
                    @endfor
                </tr>

                <tr>
                    <td class="header" align="center" height="50">
                        <b>{{ __('Saturday')}}</b>
                    </td>

                    @foreach((array)json_decode($emp->saturday, true) as $member)

                        <td align="center" height="50">
                            <div class="row">
                                <div class="col-md-6"><b>{{ $member['from'] }}</b></div>
                                <div class="col-md-6"><b>{{ $member['to'] }}</b></div>
                                <div class="col-md-12">
                                    {{ $member['name'] }}
                                </div>
                            </div>

                        </td>

                    @endforeach

                    @for ($i =$size[5]; $i < max($size); $i++)
                        <td align="center" height="50">
                        </td>
                    @endfor

                </tr>
            </table>
            @endforeach
            @else

                <div class="card ">

                    <h5 class="text-center" style="color: #a71d2a"><i class="fa fa-spinner" style="margin: 2%; width: 100%; height: 50%;"></i>
                        Aucun emploi attribué pour votre enfant</h5>
                </div>
            @endif

        </section>

    </div>
</div>

</body>
</html>
