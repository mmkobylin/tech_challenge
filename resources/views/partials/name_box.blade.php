@if (count($players) === 0 )
    <p class="list-group">No names yet!</p>
@else 
    @foreach($players as $player)
    <div class="list-group">
            <h5 class="names">{{$player}}</h5>
        </a>
    </div>
    @endforeach 
@endif
