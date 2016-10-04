@extends('layouts.main')

@section('content')

    <div class="panel panel-default">
        <table class="table">

            @foreach ($part_arr as $part)
                <tr>
                    <td class="middle">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">{{ $part->name }}</h4>


                            </div><address>
                                {{ "Weight: ".$part["weight"] }}
                            </address>

                            <address>
                                {{ "Price: ".$part["price"] }}
                            </address>

                            <address>
                                {{ "Producer: ".$producer_arr[$part['producer_id']] }}
                            </address>

                            <address>
                                {{ "Group: ".$groups_arr[$part['groups_id']] }}
                            </address>

                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="text-center">
        <nav>
            {!! $part_arr->appends( Request::query() )->render() !!}
        </nav>
    </div>

@endsection