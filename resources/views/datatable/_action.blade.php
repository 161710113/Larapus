{{--  {!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline'] ) !!}  --}}
{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message] ) !!}
<a class="btn btn-outline-info" href="{{ $edit_url }}">Ubah</a> &nbsp;&nbsp;&nbsp;
{!! Form::submit('Hapus', ['class'=>'btn btn-xs btn-danger']) !!}
{!! Form::close()!!}