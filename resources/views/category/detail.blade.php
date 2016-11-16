@extends('layouts.master')

@section('content')
    <div class="container category">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $category->name }}</h2>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h3 class="page-header">{{ $category->description }}</h3>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::open(['url' => 'lesson/create', 'method' => 'post']) }}
                <div class="col-md-3">
                    {{ Form::radio('lesson_type', config('constants.LESSON_1')) }} {{ trans('message.name_lesson_1') }}
                </div>
                <div class="col-md-3">
                    {{ Form::radio('lesson_type', config('constants.LESSON_2')) }} {{ trans('message.name_lesson_2') }}
                </div>
                <div class="col-md-3">
                    {{ Form::radio('lesson_type', config('constants.LESSON_3')) }} {{ trans('message.name_lesson_3') }}
                </div>
                {{ Form::hidden('category_id', $category->id )}}
                {{ Form::hidden('user_id', $user->id) }}
                <div class="col-md-3">
                    {{ Form::submit(trans('message.start_lesson'), array('class'=> 'btn btn-primary search')) }}
                </div>
                {{ Form::close() }}
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>{{ trans('message.id') }}</th>
                        <th>{{ trans('message.categories') }}</th>
                        <th>{{ trans('message.date') }}</th>
                        <th>{{ trans('message.score') }}</th>
                    </thead>
                    <tbody>
                    @foreach($lessons as $key => $lesson)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><a href="{{ route('lesson', ['id' => $category->id, 'lessonId' => $lesson->id]) }}">{{ trans('message.result') }}</a></td>
                            <td>{{ $lesson->created_at }}</td>
                            <td>{{ (int) $lesson->score }}/{{ $lesson->type }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $lessons->links() }}
            </div>
        </div>
    </div>
@stop
