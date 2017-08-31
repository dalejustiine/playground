@if ($pager->lastPage() > 1)
	<ul class="pager">
		@if(!($pager->currentPage() == 1))
		    <li class="previous">
		        <a href="{{ $pager->url($pager->currentPage()-1) }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Newer</a>
		    </li>
	    @endif
	    @if(!($pager->currentPage() == $pager->lastPage()))
		    <li class="next">
		        <a href="{{ $pager->url($pager->currentPage()+1) }}" >Older <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		    </li>
	    @endif
	</ul>
@endif