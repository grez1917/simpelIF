@extends('layouts.full')
@section('sideMenu')
		<div class="menu_section">
			 <h3>Settings</h3>
                <?php $i = 1; ?>
                @foreach ($items as $item)
                    <ul class="nav side-menu">
                        <li><a href="{{URL::to($item->url)}}"><i class="fa fa-home"></i> {{ $item->name }} </a></li>
                    </ul>
                @endforeach
        </div>
@stop

