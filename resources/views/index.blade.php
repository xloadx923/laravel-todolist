@extends('layout')

@section('content')
            <ul class='listTasks'>
                <li class='cellList refs'>
                    <div>Description</div><div>Priority</div><div>Date_reminder</div><div>Thème</div>@isset($page) <div>Done</div><div>Save</div> @endisset
                </li>
                @foreach($tasks as $task)
                    <form merthod='GET' action='update.php?id={{ $task->id_task }}' id='formAccueil{{ $task->id_task }}' name='formAccueil{{ $task->id_task }}' class='formAccueil'>
                        <li class='cellList' style='background-color: {{ $task->color }}'>
                            <div class='description'>
                                <input type='text' value='{{ $task->description }}' id='id-description' name='id-description' />
                            </div>
                            <div class='priority'>
                                <span>Priorité</span>
                                <select id="select-priority" name="select-priority">
                                    @for($i=1;$i<=5;$i++)
                                        <option value="{{ $i }}">{{ $i }}</option>';
                                    @endfor
                                </select>
                            </div>
                            <div class='date'>{{ $task->date_reminder }}</div>
                            <div class='theme'>
                            @foreach($contains as $contain)
                                @if($task->task_id === $contain->task_id)
                                    @foreach($themes as $theme)
                                        @if($contain->theme_id === $theme->theme_id)
                                        <label for='theme{{ $task->task_id }}'>{{ $theme->theme_name }}</label><input type='checkbox' id='theme{{ $contain->theme_id }}' name='theme{{ $contain->theme_id }}' value='{{ $contain->theme_id }}' checked disabled />
                                        @endif
                                    @endforeach        
                                @endif
                            @endforeach
                            </div>
                            @if(!isset($page))
                                <div class="div-checkbox">
                                    <span>Valider</span>
                                    <input type="checkbox" value="{{ $task->task_id }}" id="id-checkbox{{ $task->task_id }}" name="id-checkbox{{ $task->task_id }}" class="id-checkbox" checked="" />
                                </div>
                                <div class="div-description">
                                    <button class="btn-description" id="btn-description{{ $task->task_id }}" name="btn-description{{ $task->task_id }}"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                </div>
                            @endif
                            </div>
                        </li>
                    </form>
                @endforeach
            </ul>
@endsection
