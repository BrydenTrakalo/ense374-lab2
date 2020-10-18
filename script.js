$(document).ready(function(){ 
    $("#signup-card-body").hide();
    $("#login-card-header").click(function(){
        $("#signup-card-body").slideUp();
        $("#login-card-body").slideDown();
    });
    $("#signup-card-header").click(function(){
        $("#login-card-body").slideUp();
        $("#signup-card-body").slideDown();
    });

    $(".welcome-form").submit(function(){
       window.location.href = 'index.html';
       return false;
    });

    $("#task-form").submit(function(){
        var str = print_task(8, 0, 0, document.getElementById("formGroupExampleInput").value);
        $("#task-list").append(str);
        document.getElementById("formGroupExampleInput").value = "";
        return false;
    });

    var version = 0;
    $(".list-form").submit(function(){
        if (version == 0){
            version = 1;
            append_task(7, version, 1, "This task has Interaction");
        }
        else{
            version = 0;
            append_task(7, version, 1, "This task has Interaction");
        }
        return false;
    });


    $("#removal").click(function(){
        $(".finished").hide();

    });

    //use alot of real appends to print with javascript and i should use JS arrays here to store all fo the data..






    function print1_task(task, strikethrough, owner, task_text){
        var str= print_task(task, strikethrough, owner, task_text);
        document.getElementById("task-list").append(str);
    }

    function append_task(task, strikethrough, owner, task_text){
        var str= print_task(task, strikethrough, owner, task_text);
        document.getElementById(task).append(str);
        document.getElementById(task).remove();
    }

    function print_task(task, strikethrough, owner, task_text){
        var str1 = "<form id='" + task + "' class = 'list-form'>";
        var str2 = "<input type='hidden' name='task_num' value ='" + task + "'></input>";
        var str3 = "<input type='hidden' name='owner' value ='" + owner + "'></input><input type='hidden' name='task_text' value ='" + task_text + "'></input>";
        var str4 = "<div class='input-group'>";
        var str5 = "<div class='input-group-prepend'><div class='input-group-text'><input type='checkbox'"
        var str6 = " checked";
        var str7 = "></div></div>";
        var str8 = "<p class='form-control'>";
        var str9 = "<s>";
        var str10 = task_text + "</p>";
        var str11 = "</s>";
        var str12 = "<div class='input-group-append'>";
        var str13 = "<input type='submit' class='input-group-text task-abandon' name = 'abandon' value='Abandon'/>";
        var str14 = "<input type='submit' class='input-group-text task-claim' name = 'claim' value='Claim'/>";
        var str15 = "</div></div></form>";

        var str_total = str1 + str2 + str3 + str4;
        if (owner == 0){ //an unclaimed task
            str_total += str8 + str10 + str12 + str14 + str15;
            return str_total;
        }

        if (owner == 1){ //my task
            str_total += str5;
            if (strikethrough == 1){    //puts the strikethrough
                str_total += str6 + str7 + str8 + str9 + str10 + str11;
            }else{
                str_total += str7 + str8 + str10;
            }
            str_total += str12 + str13 + str15;
        }
        
        if (owner == 2){ //someone elses task
            if (strikethrough == 1){    //puts the strikethrough
                str_total += str6 + str7 + str8 + str9 + str10 + str11;
            }else{
                str_total += str7 + str8 + str10;
            }
            str_total += str15;
        }
        return str_total;
    }

   });