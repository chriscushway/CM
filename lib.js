function responsiveNav(bool){
    
    $("nav").children().each(function(){
        
        if(!bool){
            
            $(this).addClass("responsive");

        }else{
            
            $(this).removeClass("responsive");
            
        }
    });
    
}


$("nav a").click(function(){
    
    $("nav a").removeClass("active-link");
    $(this).addClass("active-link")
    
    
});

$("#menu-icon").click(function(){
    
    if($("nav").hasClass("responsive")){
        
        $("nav").removeClass("responsive");
        responsiveNav(true);
        
    }else{
        
        $("nav").addClass("responsive");
        responsiveNav(false);
        
    }
    
});

$(".drop").hover(function(){
    
    $(this).find(".dropdown").slideToggle("1000","linear");
    
},function(){
    
     $(this).find(".dropdown").slideToggle("1000","linear");
        
});

if($("nav").length && $(".nav-bar-pad").length){
    $(".nav-bar-pad").css("height",$("nav").css("height"));
    
}

function dynamicHomePage(){
    if($(".parallax").length){
        $(".parallax").css("height",$(window).height()-$("nav").height());
        
    }
}

function dynamicBookingPage(){
    if($(".resize-para").length){
        $(".parallax-4").css("height",($(window).height()*0.7)-$("nav").height());
        
    }
}

function dynamicTermsAndConditions(){
    if($(".form-info-container").length){
        if($(window).width()<=600){
            $(".form-info-container").css("height",($(".form-info").outerHeight()));
           
        }
        
    }
}

function adjustDiv50(){
    
    var parent = $(document).find(".div-50-container");
    var height = parent.children(".div-50").eq(0).height();
    parent.children(".div-50").eq(1).height(height);
}

adjustDiv50();
dynamicHomePage();
dynamicBookingPage();


$(".cert").click(function(){
    
    $(this).toggleClass("overlay");
    if($(this).hasClass("overlay")){
        $(this).removeClass("zoom");
    }else{
        $(this).addClass("zoom");
    }
    $(this).find(".exit").toggle();
   
});

//-----carousel variables----
const slides=Array();
var formWidth;
//----carousel variables end ----

//----carousel functions-----
function initSlideArray(){
     $(".slide").each(function(){
        slides.push($(this));
    });
}

function getFormWidth(){
    return formWidth;
}


function reassignLeft(left){
    if(left<=20 && left>0){
        return 0;
    }else
        return left;
}

function initSlides(index){
    var left=-index*getFormWidth();
    $(".slide").each(function(){
        $(this).css("left",left+'px');
        left+=getFormWidth()
    });
    
    $(".carousel-cont").css("height",slides[index].height()+BottomElement()+'px');
}


$(".next").click(function(){
    
    for(var i=0;i<slides.length;i++){
        var left=parseInt(slides[i].css("left"));
        if(left==0 && i!=slides.length-1){
            animateFormHeight(false,i,animateSlides,false);
            break;
            }  
    }
        
});

$(".prev").click(function(){
   
    for(var i=0;i<slides.length;i++){
        var left=parseInt(slides[i].css("left"));
        //console.log(left);
        if(left==0 && i!=0){
            animateFormHeight(true,i,animateSlides,false);
            break;
        }  
    }
    
});

function slideLeft(cont){
    for(var i=0;i<slides.length;i++){
        var left=parseInt(slides[i].css("left"));
        //console.log(left);
        if(left==0 && i!=0 || cont){
            animateFormHeight(false,i,animateSlides,cont);
            break;
        }  
    }
}
function checkLastSlide(cont,index){
    if(cont && parseInt(slides[index-1].css("left"))==0){
        console.log("last slide reached");
        initSlides(0);
    }

}

function animateSlides(lor,index,markSlideNumber,cont){
    var left=0;
    if(lor){
        for(var i=0;i<slides.length;i++){
            left=getFormWidth();
            slides[i].animate({
                left:'+='+left+'px'
            },1000,function(){
                initSlideControl();
                checkLastSlide(cont,i);
            });
        }
    }else{
        for(var i=0;i<slides.length;i++){
            left=getFormWidth();
            slides[i].animate({
                left:'-='+left+'px'
            },1000,function(){
                initSlideControl();
                checkLastSlide(cont,i);
            });
        }
    }
 
}

function BottomElement(){
    if($(".bottom").length){
        return $(".bottom").height();
    }else{
        return 0;
    }
}

function animateFormHeight(bool,index,func,cont){
    if(bool){
        if(slides[index-1].height()+BottomElement()!=$(".carousel-cont").height()){
            $(".carousel-cont").animate({
                height:slides[index-1].height()+BottomElement()+"px"
            },500,function(){
                func(bool,index,markSlideNumber,cont);
            });
        }else{
            func(bool,index,markSlideNumber,cont);
            
        }
    }else{
        if(slides[index+1].height()+BottomElement()!=$(".carousel-cont").height()){
            $(".carousel-cont").animate({
                height:slides[index+1].height()+BottomElement()+"px"
            },500,function(){
                func(bool,index,markSlideNumber,cont);
            });
        }else{
            func(bool,index,markSlideNumber,cont);
           
        }
    } 
    
}

function markSlideNumber(){
    var left;
    for(var i=0;i<slides.length;i++){
        left=parseInt(slides[i].css("left"));
        if(left==0 ){
            $(".index-button").eq(i).addClass("active");
        }else{
            $(".index-button").eq(i).removeClass("active");
        }
    }
}

$(".index-button").click(function(){

   initSlides($(this).attr("value"));
    markSlideNumber();
});

function resizeSlides(){
    for(var i=0;i<slides.length;i++){
        if(parseInt(slides[i].css('left'))==0){
            initSlides(i);
        }
    }
}
$(window).resize(function(){
    
    formWidth=$(".slide-show").outerWidth();
    resizeSlides();
    dynamicHomePage();
    dynamicBookingPage();
    dynamicTermsAndConditions();
});

function initSlideControl(){
    if($(".index-button").length){
        markSlideNumber();
        return true;
    }else{
        return false;
    }
}

if($(".slide-show").length){
    formWidth=$(".slide-show").outerWidth();
    initSlideArray();
    initSlides(0);
    initSlideControl();
}

function progress(){
    
    $(".progress-bar").animate({
    
        left:'0%'
        
        },4000,"easeOutSine",function(){
    
            $(".progress-bar").css({
                "left":"-100%"
            }).delay(2000);
            slideLeft(true);
            setTimeout(progress,100);
        });
        
}

function stopSlider(){
    
    $(".progress-bar").stop();
    $(".progress-bar").css("left","-100%");
}

$(".pauseable").on("mouseenter",stopSlider).on("mouseleave",progress);
if($(".progress-bar").length){
    progress();
}
//------carousel functions end-----------

//----------Checkbox functions ---------
function resizeForms(parent,length){
    
    parent.children(".sub-form").css("width",100/length + "%");
}

function hideUnchecked(parent,index,showAll,children,both){
    
    var loop=parent.find(".sub-form").each(function(i){
        if(!both){
             $(this).slideUp(550);  
        }else{
            
            if(parent.find(".check").eq(i).prop("checked")===false){
                if($(this).is("hidden")===false){
                    $(this).slideUp(550);
                }
            }
        }
        
    });
    
    
    if(showAll){
        $.when(loop).done(function(){
            resizeForms(parent,children.length);
            parent.children(".sub-form").slideDown(550);
        });
    }else{
        $.when(loop).done(function(){
            resizeForms(parent,1);
            parent.children(".sub-form").eq(index).slideDown(550);
        });
    }
}

function removeChecks(checkbox,parent){
    parent.find(".cb").not(checkbox).prop("checked",false);
}

function checkboxFormReveal(checkbox,parent,index,name){
    
    var children=parent.children(".sub-form");
    var x;
    if(checkbox.prop("checked")===true){
        if(checkbox.attr("name").includes("both")){
            x=hideUnchecked(parent,index,true,children,true);
        }else if(checkbox.attr("name").includes("multiple")){
             x=hideUnchecked(parent,index,false,children,true);       
        }else{
            x=hideUnchecked(parent,index,false,children,false);
        }
    }else{
        if(checkbox.attr("name").includes("both")){
            x=parent.children(".sub-form").slideUp(550);
        }else{
            x=parent.children(".sub-form").eq(index).slideUp(550);
        }
            
    }
    $.when(x).done(function(){
        if(checkbox.parents(".slide-show").length && $(".active").html()==3){
            if(checkbox.prop("checked")===true){
                $(".carousel-cont").css("height",slides[2].height()+BottomElement()+$(".checkbox-form-container").height()+40+'px');
            }else if(!$(this).prop("checked")){
                var count=0;
                var height=0;
                $(".sub-form").each(function(){
                    if($(this).is(":visible")){
                        count++;
                    }else{
                        count--;
                    }
                    
                });
                if(count<3)
                    count=0;
                height=$(".sub-form").height()*count;
                $(".carousel-cont").css("height",slides[2].height()+BottomElement()+height+'px');
            }
            
        }
    });
}

$("input:checkbox").click(function(){
    
    var parent=$(this).closest(".checkbox-form-container");
    var index=$(this).closest(".container").index();
    
    if($(this).parents(".checkbox").attr("allowOne")==="true"){
            removeChecks($(this),parent);
    }
    //cb lets us know it has hidden form
    if($(this).hasClass("cb")){
        checkboxFormReveal($(this),parent,index,$(this).attr("name"));
    }

});

//----------Checkbox functions end ---------

function atTopScroll(element){
    $(element).each(function(){});
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(element).offset().top;
    var elemBottom = elemTop + $(element).height();

    if ((elemTop <= docViewTop)){
        console.log($(element).html());
        $(".form-info").find("div").eq($(element).index()).show("slide",{direction: 'up'});
        return true;
    }
}

function setInfoContainerHeight(){
    
    $(".form-info-container").height($("form").height());

}

$.fn.isInViewport = function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height()/2;
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

$(window).on('resize scroll', function() {
    $("h4").each(function(){
       if($(this).isInViewport()){
           $(".form-info").find("div").eq($(this).index("h4")).show("drop",{direction: "down"}, 1000);
       }else{
           $(".form-info").find("div").eq($(this).index("h4")).hide("fade",300);
       }
    });
    
    
});



setInfoContainerHeight();

$("input[type!='checkbox']").focus(function(){
    var label=$("label[for='"+$(this).attr("name")+"']");
    label.find('span').remove();
});

//function to check if any items are empty




$("input").focus(function(){
    
    if($(this).hasClass("alert-danger")){
        $(this).removeClass("alert-danger");
    }
    
});

$("textarea").focus(function(){
    
    if($(this).hasClass("alert-danger")){
        $(this).removeClass("alert-danger");
    }
    
});

//--------------------Date form functions---------------
function getDaysInMonth(month,year){
    return new Date(year,month,0).getDate();
}

function getDifferenceDays(first,second){
    return Math.round((second-first)/(1000*60*60*24));
}

function displayRecursive(input,parent){
    if(input.attr("name").includes("end")){
        var endDate=validateInput(input);
        var startDate =validateInput(parent.siblings().find("input[type='date']"));
        
    }else{
        var startDate=validateInput(input);
        var endDate =validateInput(parent.siblings().find("input[type='date']"));
    }
    var first=new Date(startDate[0],startDate[1],startDate[2]);
    var second=new Date(endDate[0],endDate[1],endDate[2]);
    //console.log(getDifferenceDays(startDate,endDate));
    if(startDate == false || endDate==false){
        return false
    }else if(second>=first){
        var form=parent.siblings(".recursive-form").eq(0);
        var gParent=parent.closest(".sub-form");
        var difference=getDifferenceDays(first,second);
        if(difference==0){
            form.find(".date-header").html(startDate[2]+'/'+startDate[1]+'/'+startDate[0]);
        }else{
            for(var i=0;i<difference;i++){
                form.clone(true).appendTo(gParent);
            }
        }
        var count=0;
        
        gParent.children(".recursive-form").each(function(){
            if(count>difference){
                $(this).remove();
            }else{
                
                if(startDate[2]>getDaysInMonth(startDate[1],startDate[2])){
                    startDate[2]=1;
                    difference-=count;
                    count=0;
                    startDate[1]+=1;
                    if(startDate[1]>12){
                        startDate[1]=1;
                        startDate[0]+=1;
                    }
                }
                $(this).find(".date-header").html(startDate[2]+'/'+startDate[1]+'/'+startDate[0]);
                startDate[2]+=1;
                $(this).show();
            }
            count++;
        });
    }
}


function validateInput(input){
    var date=new Date();
    var inputDate=input.val().split("-");
    for(var i=0;i<inputDate.length;i++){  
        inputDate[i]=parseInt(inputDate[i]);
    }
    var inDate=new Date(inputDate[0],inputDate[1],inputDate[2]);
    date=new Date(date.getFullYear(),date.getUTCMonth()+1,date.getUTCDate());
    if(inDate>=date){
        return inputDate;
    }else{
        return false;
    }

}


$("input[type='date']").change(function(){
    var parent=$(this).parent("div[class*='input-block']");
    validateInput($(this),parent);
        
    if(parent.siblings(".recursive-form").length){
           displayRecursive($(this),parent);
    }
    
});

//---------------date form functions end---------------


//General validation functions

function checkMatchingPassword(password, confirmPassword){
    if(password.val() != confirmPassword.val()){
        return "Passwords do not match <br>";
    }else{
        return "";
    }
}

function checkPassword(password){
    if(password.val().length < 8){
        return "Please make sure your password is atleast 8 characters long <br>";
    }else{
        return checkMatchingPassword(password,$("#confirmPassword")); 
    }
}


$(".book").click(function(e){
    e.preventDefault();
    var form=$(this).parents("form");
    var data=validateForm(form.attr("id"));
    
    if(data[data.length -1]=="1"){
      		
          $.ajax({
        	type: "POST",
          	url: "actions.php?action="+$(this).attr("action"),
          	data:data,
        	success: function(data){
            
              	alert(data);
            
            }
        
        });
      
        
    }
    
});

function checkEmpty(input){
    if(input.val()=="" && input.is(":visible")){
        input.addClass("alert-danger");
        input.attr("placeholder","");
        return true;
    }else{
        return false;
    }
        
}


function validateForm(formId){
    
    var errorMessage="";
    var empty = true;
    var count=0;
    var data = "";
    $("#"+formId+" input").each(function(){
        
        empty = checkEmpty($(this));
        
        if(($(this).attr("type")=="password" && $(this).attr("id") != "confirmPassword") && empty == false){
            errorMessage += checkPassword($("#password"));
        }
        
        if(empty){
            count++;
        }else{
            
            if($(this).attr("type")!="checkbox" && $(this).is(":visible")){
                data += $(this).attr("name")+"="+$(this).val()+"&";
            }else if($(this).attr("type")=="hidden"){
                
                data+= $(this).attr("name")+"="+$(this).val()+"&";
                
            }else{
                if($(this).prop("checked") && $(this).is(":visible")){
                    data += $(this).attr("name")+"="+$(this).val()+'&';
                }
                
            }
            
            
        }
        
    });
    
    $("#"+formId+" textarea").each(function(){
        empty = checkEmpty($(this));
        if(empty){
            count++;
        }else{
            data+= $(this).attr("name")+"="+$(this).val()+'&';
        }
        
    });
    
    if(count>0){
        errorMessage+=count+"field(s) were not filled in. Please ensure all fields are filled in before submitting";
        
    }
    
    if(errorMessage==""){
        data+="end=1";
        return data;
    }else{
        $("#errorBox").html(errorMessage);
        data+="end=0";
        return data;
    }
   
}

dynamicTermsAndConditions();
const options ={root:null,
               threshold:0.7,
               rootMargin:"0px"
               };
const sections = document.querySelectorAll(".anim");
const observer = new IntersectionObserver(function(entries,observer){
    entries.forEach(entry => {
       
        if(!entry.isIntersecting){
            return;
        }else{
            if(entry.target.classList.contains("card-text")){
                entry.target.style.animation = `anim2 1s ${entry.target.dataset.delay} forwards ease-out`;
            }else{
                   entry.target.style.animation = `anim1 1s ${entry.target.dataset.delay} forwards ease-out`; 
                
            }
        }
        
        //observer.unobserve(entry.target);
    })
}, options); 


sections.forEach(section => {
   observer.observe(section); 
});

//End of general validation functions
