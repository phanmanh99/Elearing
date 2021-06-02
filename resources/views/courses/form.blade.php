            <div class="form-group">
                {!! Form::label('title', 'Tên khóa học:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                @if ($errors->any('title'))
                    <div class="alert alert-danger">
                        Tên khóa học không được để trống
                    </div>
                @endif 
            </div
            <div class="form-group">
                {!! Form::label('thumbnail', 'Hình ảnh:' ) !!}
                {!! Form::file('thumbnail', array('class' => 'form-control', 'accept'=> 'image/*')) !!}
                @if (isset($course))
                    {!! Html::image('/storage/'.$course->thumbnail, 'Thumbnail') !!}
                @endif
                @if ($errors->any('thumbnail'))
                    <div class="alert alert-danger">
                        Ảnh không được để trống
                    </div>
                @endif 
            </div>
            <div class="form-group">
                {!! Form::label('file', 'Tài liệu:' ) !!}
                {!! Form::file('file', array('class' => 'form-control', 'accept'=> 'file/*')) !!}
                @if (isset($course))
                    {!! link_to('/storage/'.$course->file, 'Tài liệu', $secure = null); !!}
                @endif
                @if ($errors->any('file'))
                    <div class="alert alert-danger">
                        File không được để trống
                    </div>
                @endif 
            </div>
            <div class="form-group">
                {!! Form::label('information', 'Thông tin: ') !!}
                {!! Form::textarea('information', null, array('class' => 'form-control')) !!}
                @if ($errors->any('information'))
                    <div class="alert alert-danger">
                        Thông tin không được để trống
                    </div>
                @endif                  
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Mô tả: ') !!}
                {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                @if ($errors->any('description'))
                    <div class="alert alert-danger">
                        Mô tả không được để trống
                    </div>
                @endif                  
            </div>
            {!! Form::submit($submitbuttontext, ['class' => 'btn']) !!}
            {!! Form::close() !!}
