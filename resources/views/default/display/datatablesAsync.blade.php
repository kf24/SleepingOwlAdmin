@if ( ! empty($title))
	<div class="row">
		<div class="col-lg-12">
			<h2 style="margin-top:0;"><small>{{ $title }}</small></h2>
		</div>
	</div>
@endif
<div class="panel panel-default">
	<div class="panel-heading">
		@if ($creatable)
			{!! link_to($createUrl, trans('sleeping_owl::lang.table.new-entry'), [
                'class' => 'btn btn-primary btn-labeled', 'data-icon' => 'plus'
            ]) !!}
		@endif

		<div class="pull-right tableActions">
			@foreach ($actions as $action)
				{!! $action !!}
			@endforeach
		</div>
	</div>
	<div class="panel-body">
		<table {!! HTML::attributes($attributes) !!}>
			<colgroup>
				@foreach ($columns as $column)
					<col width="{!! $column->getWidth() !!}" />
				@endforeach
			</colgroup>
			<thead>
			<tr>
				@foreach ($columns as $column)
					{!! $column->getHeader()->render() !!}
				@endforeach
			</tr>
			</thead>
			<tbody>
			</tbody>

			<tfoot>
			@include('sleeping_owl::default.columnfilter.filter_list')
			</tfoot>
		</table>
	</div>
</div>