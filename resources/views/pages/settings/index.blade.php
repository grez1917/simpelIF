@extends('layouts.full')
@section('sideMenu')

                <?php $i = 1; ?>
                @foreach ($items as $item)
                    <ul class="nav side-menu">
                        <li><a href="{{$item->url}}"><i class="fa fa-home"></i> {{ $item->name }} </a>

                    </ul>
                @endforeach
@stop