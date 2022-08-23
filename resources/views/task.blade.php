<html>    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">    
    </head>    
    <body>
        <div class="layout">
            <div class="task-view">
                <h2 class="todo-label">todos</h2>
                <div class="task-form-div">                    
                    <form action="/" method="POST" class="submit-task">
                        @csrf
                        <div style="display: flex; justify-content: left;"><i class="fa fa-chevron-down" style="font-size:24px; padding-left: 5px; position: absolute; padding-top: 12px; color:rgb(145, 143, 143)"></i><div>
                        <input class="task-input" type="text" placeholder="What needs to be done?" name="title" onkeydown="addTask()">                    
                        <input type="submit" id="task-submit" style="display: none">
                    </form>                    
                    @if(!$task->isEmpty())
                    <div class="task-list">
                        <div class="task-form">
                            @for ($i = 0; $i < count($task); $i++)
                            <div class="task-select">
                                <input class="task-radio mr-2" type="radio" id="html" name="fav_language" value="HTML">
                                <label class="task-title" for="html">Task1</label><br>                        
                            </div>                                                                                                                                         
                            @endfor                            
                        </div>                                                  
                    </div>
                    <div class="display-mode">
                        <div class="item-text">1 item left</div>
                        <div class="status-btns">
                            <button class="status active mr-2">All</button>
                            <button class="status mr-2">Active</button>
                            <button class="status">Completed</button>
                        </div>
                    </div>   
                    @endif
                </div>
                </div>
            </div>
        </div>
        <script>           
            function addTask(evt) {
                var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
                if(keyCode == 13)
                {
                       
                }
            }
        </script>
    </body>
</html>