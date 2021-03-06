@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
	  <div class="col-md-12">
			 <div class="box">
	   <form action="{{url('tambahdataSub')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form add Sub Kategori</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Sub Kategori </span>
                <input title="Nama Sub"type="text" name="namaSub" autocomplete="off" required class="form-control">
				</div><br>
				
				<select name="idKategori" id='idKategori' class="form-control"> 
												<option value="">- Select Kategori</option>
												@foreach ($kategori as $Akategori)
												<option value="{{$Akategori->idKategori}}" />{{$Akategori->namaKategori}}
											    @endforeach
				</select>
				
		</div>
        <div class="box-footer">
							<div class="col-md-offset-10 col-md-9">
								
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
							</div>
		
        </div>
		</form>
		</div>
		</div>
      </div>
      
</section>
          <!-- /.box -->
@endsection