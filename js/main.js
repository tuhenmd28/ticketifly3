
// location element filter 
window.onload = load();
window.onload = load1();
window.onload = load2();
window.onload = load3();
function load(){
    $('.filterLocation .btnlist>li').click(function(){
        $(this).addClass('active');
      let value =$(this).attr('data-filter');
      let item = $('.filterLocation .filterItem .item-wrap');
      console.log(value);
        if(value == 'all'){
            $('.filterLocation .filterItem .item-wrap').show(1000)
        }else{
            item.not('.'+value).hide(1000);
            item.filter('.'+value).show(1000);
        }
        // class1 = item.attr('class').split(' ')[0];
        $(this).siblings().removeClass('active')
    
        // console.log(jQuery('selector').attr('class').split(' ')[0]);
    })
}
function load1(){
    $('.flightDeals.flight .filterLocation .btnlist>li').click(function(){
        $(this).addClass('active');
      let value =$(this).attr('data-filter');
      let item = $('.flightDeals.flight .filterLocation .filterItem1 .item-wrap');
      console.log(value);
        if(value == 'Las-Vegas'){
            item.show(1000)
        }else{
            item.not('.'+value).hide(1000);
            item.filter('.'+value).show(1000);
        }
        // class1 = item.attr('class').split(' ')[0];
        $(this).siblings().removeClass('active')
    
        // console.log(jQuery('selector').attr('class').split(' ')[0]);
    })
}
function load2(){
    $('.flightDeals.flight1 .filterLocation .btnlist>li').click(function(){
        $(this).addClass('active');
      let value =$(this).attr('data-filter');
      let item = $('.flightDeals.flight1 .filterLocation .filterItem1 .item-wrap');
      console.log(value);
        if(value == 'AtlantaToNewYork'){
            item.show(1000)
        }else{
            item.not('.'+value).hide(1000);
            item.filter('.'+value).show(1000);
        }
        // class1 = item.attr('class').split(' ')[0];
        $(this).siblings().removeClass('active')
    
        // console.log(jQuery('selector').attr('class').split(' ')[0]);
    })
}
// FAQ page filter function and other code start
function load3(){
    $('.tabContent .tab-pane .nextRow ul li').click(function(){
        $(this).addClass('active');
      let value =$(this).attr('data-filter');
      let item = $('.tabContent .nextRow .accordion .accordion-item');
      console.log(value);
        if(value == 'AboutTicketiflyTickets'){
            item.show(1000)
        }else{
            item.not('.'+value).hide(1000);
            item.filter('.'+value).show(1000);
        }
        $(this).siblings().removeClass('active')
    
    })
}

    $('.faqBanner.mcform div .nav-tabs a.nav-link').click(function(){
        let thisText = $(this).text();
        console.log(thisText);
        $('.faqBanner.bread nav ol li.breadcrumb-item:last-child').text(thisText)
    })

// FAQ page filter function and other code end


// viewDeal page top slider active class code start 
$('.viewDealBanner .viweDealSlider .sliderItem').each(function(){
    $(this).click(function(){
        $(this).siblings().removeClass('active');
        if($(this).children().is('.note.hoverItem')){
            let value = $(this).find('.note.hoverItem').attr("data-value");
            $(".flightDetails h3.header-title span").text(value)
        }else{
            $(".flightDetails h3.header-title span").text('');
        }
    });
});
// viewDeal page top slider active class code end


// singleAirline page modal code

let singleItem = $('.singleBanner .maincontent .tab-content .areaWraper .aitem');

singleItem.each(function(){
    $(this).click(function(){
        let value = $(this).children()[1].innerHTML;
        $('#singlemodel .modalleftsite h4 strong').text(value)
        // console.log(value);
    });
});

// singleAirline page modal code



// single Airline page economy and business tabs start 

var tabs = $(".singleBanner .col-lg-7 div .nav-tabs a.nav-link");
let headingText = $('.singleBanner .col-lg-7>h3').html();
let breadcrumb = $('.singleBanner .breadcrumb li:nth-child(2) a').html();

tabs.each(function(){
    $(this).click(function(){
        // console.log($(this).text());
        let clickItem = $(this);
        let firstTab = tabs[0];
        let lastTab = tabs[1].text;
        if( firstTab.text == clickItem.text()){
           let replacetext1 = headingText.replace(lastTab,'Cheap');
           $('.singleBanner .col-lg-7>h3').text(replacetext1);
           let replacetext2 = breadcrumb.replace('Business','Top');
           $('.singleBanner .breadcrumb li:nth-child(2) a').text(replacetext2);

        }else{
            let replacetext = clickItem.text();
            let replacetext1 = headingText.replace('Cheap',replacetext);
            $('.singleBanner .col-lg-7>h3').text(replacetext1);
            let replacetext2 = breadcrumb.replace('Top','Business');
            $('.singleBanner .breadcrumb li:nth-child(2) a').text(replacetext2);
 
        }
    });
});
// single Airline page economy and business tabs end
// single Airline page filter area start
// function load(){
    $('.singleBanner .maincontent .leftArea ul li').click(function(){
        $(this).addClass('active');
      let value =$(this).attr('data-filter');
      let item = $('.singleBanner .maincontent .tab-content .areaWraper .aitem');
        if(value == 'asia'){
            item.show(400)
        }else{
            item.not('.'+value).hide(400);
            item.filter('.'+value).show(400);
        }
        $(this).siblings().removeClass('active')
    
    });
// }
// single Airline page filter area start end

// home page one way 
$('.radiobtn ul li:nth-child(2)').click(function(){
    $('.date li:last-child input#return').css({
        "background": "gainsboro",
        "pointer-events": "none",
        "cursor": "default"
    })
});
$('.radiobtn ul li:nth-child(1)').click(function(){
    $('.date li:last-child input#return').css({
        "background": "transparent",
        "pointer-events": "all",
        "cursor": "pointer"
    })
});





// console.log('280');

$('.page-header__call').click(function(){
    $('div#overlay').show();
    $('.lowest').toggle();
})
$('.fixCallAnimation').click(function(){
    $('div#overlay').show();
    $('.lowest').toggle();
})
$('.top-div .wrap >div').click(function(){
    $('.top-div').hide(150);
    $(".panel-fixed").addClass('height')
})

// $(document).on('click', '.lowest>img', function(){
//     $('.lowest').hide();
//     $('div#overlay').hide();
// });

$(document).ready(function(){
    $('.lowest>img').click(function(){
        $('.lowest').hide();
        $('div#overlay').hide(); 
    })
})

$(".phoneArea .picon img").click(function(){
    $('.lowest').show();
    $('div#overlay').show();
})
$(".shownumber>img").click(function(){
    $('.shownumber').hide();
    $('div#overlay').hide();
})
$(".text p").click(function(){
    $('.shownumber').show();
    $('div#overlay').show();
})


// function of(){
    $('div#overlay').click(function(){
        $('.lowest').hide();
        $('.shownumber').hide();
        $(this).hide(100);
        $(".scerch_container").removeClass('show');
        $('.search').children('img').attr('src','img/search.png');

    })
// }

// // for search icon 
// $(document).ready(function(){
//     console.log('click');
//     $("form .formcontent .passenger.sicon li").click(function(){
//         $(".passenger.sicon .addpsgerwraper").toggle(500);
//     })
//     $(".passenger.sicon button.ok.btn.btn-primary").click(function(){
//         $(".passenger.sicon .addpsgerwraper").hide(500);
//     })   

// })

// let passengerSicon = $(".passenger.sicon .addpsgerwraper .passengerAdd span");
// let passengerSicon1 =Number( passengerSicon[0].textContent);
// let passengerSicon2 = Number(passengerSicon[1].textContent);
// let passengerSicon3 = Number(passengerSicon[2].textContent);
// let sumSicon = passengerSicon1 + passengerSicon2 + passengerSicon3;
// let btnSicon;
// let countSicon;
// $("form .formcontent .passenger.sicon .invisible").val(Number(sumSicon.slice(0,2)));

// function additionS(e){
//     btnSicon = e;
//     countSicon = Number(btnSicon.previousElementSibling.textContent)
//     if(countSicon<=10){
//         ++countSicon;
//     }
//     btnSicon.previousElementSibling.innerHTML = countSicon;
//      passengerSicon1 =Number( passengerSicon[0].textContent);
//      passengerSicon2 = Number(passengerSicon[1].textContent);
//      passengerSicon3 = Number(passengerSicon[2].textContent);
//     sumSicon = passengerSicon1 + passengerSicon2 + passengerSicon3;
//     if(sumSicon==1){
//         sumSicon =  `${sumSicon} passenger`;
//     }else{
//         sumSicon =  `${sumSicon} passengers`;

//     }
//     $("form .formcontent .passenger.sicon li samp").text(sumSicon);
//     $("form .formcontent .passenger.sicon .invisible").val(Number(sumSicon.slice(0,1)));

// }
// function sumtractS(e){
//     btnSicon = e;
//     countSicon = Number(btnSicon.nextElementSibling.textContent)
//     if(countSicon>=2){
//         --countSicon;
//     }
//     btnSicon.nextElementSibling.innerHTML = countSicon;
//      passengerSicon1 =Number( passengerSicon[0].textContent);
//      passengerSicon2 = Number(passengerSicon[1].textContent);
//      passengerSicon3 = Number(passengerSicon[2].textContent);
//     sumSicon = passengerSicon1 + passengerSicon2 + passengerSicon3;
//     if(sumSicon==1){
//         sumSicon =  `${sumSicon} passenger`;
//     }else{
//         sumSicon =  `${sumSicon} passengers`;
        
//     }
//     $("form .formcontent .passenger.sicon li samp").text(sumSicon);
//     $("form .formcontent .passenger.sicon .invisible").val(Number(sumSicon.slice(0,1)));

// }
// function sumtract1S(e){
//     btnSicon = e;
//     countSicon = Number(btnSicon.nextElementSibling.textContent)
//     if(countSicon>=1){
//         --countSicon;
//     }
//     btnSicon.nextElementSibling.innerHTML = countSicon;
//      passengerSicon1 =Number( passengerSicon[0].textContent);
//      passengerSicon2 = Number(passengerSicon[1].textContent);
//      passengerSicon3 = Number(passengerSicon[2].textContent);
//     sumSicon = passengerSicon1 + passengerSicon2 + passengerSicon3;
//     if(sumSicon==1){
//         sumSicon =  `${sumSicon} passenger`;
//     }else{
//         sumSicon =  `${sumSicon} passengers`;

//     }
//     $("form .formcontent .passenger.sicon li samp").text(sumSicon);
//     $("form .formcontent .passenger.sicon .invisible").val(Number(sumSicon.slice(0,1)));
// }
 
// search icon click 


// slider locatin element filter

// passenger counter start
let subtractbtn = $('.classAndPassenger>div >div >.btnsubadd>span:nth-child(1)');
let numbershowbtn = $(".classAndPassenger>div >div >.btnsubadd>span:nth-child(2)");
let additionbtn = $(".classAndPassenger>div >div >.btnsubadd>span:nth-child(3)");

$('li#passengerli>input ').click(function(){
    $('.classAndPassenger').toggle(500);
});
$('li#passengerli span.btn.btn-primary.float-right.mt-3').click(function(){
    $('.classAndPassenger').hide(500);
});
// console.log("191");
function subtract(){
    subtractbtn.each(function(){
        $(this).click(function(){
            let item = $(this);
            let value = Number(item.next().text());
            if(value >= 1){
                value = value - 1;
                item.next().text(value);
            }
            let totalvalue = maincunter();
            if(totalvalue <= 9){
                $('.total').text(totalvalue +" "+ classvlaue);
            }
            if(value <= 1 ){
                item.addClass('disable')
            }else{
                item.removeClass('disable')
            }
            if(totalvalue >= 9){
                additionbtn.addClass('disable')
            }else{
                additionbtn.removeClass('disable')
            }
            arr = [];

        })
    })
}

let classvlaue = $("span.total").html().slice(2);
// function classChange(){
    $("input[name=class]").change(function(){
        classvlaue = $(this).val();
        let mainText = $("span.total").html();
        let replaceValue = $("span.total").html().slice(2);
        let replaceText = mainText.replace(replaceValue,classvlaue);
        $('.total').text(replaceText);
    });
function addition(){
    additionbtn.each(function(){
        $(this).click(function(){
            let item = $(this);
            let value = Number(item.prev().text())
            if(value<9){
                value = value + 1;
                item.prev().text(value);
               let itemsubtract  = item.prev().prev();
                if(value < 1 ){
                    itemsubtract.addClass('disable')
                }else{
                    itemsubtract.removeClass('disable')
                }
            }
            let totalvalue = maincunter();
            if(totalvalue <= 9){
                $('.total').text(totalvalue +" "+ classvlaue );
            }
            console.log(totalvalue);
            if(totalvalue >= 9){
                additionbtn.addClass('disable')
            }else{
                additionbtn.removeClass('disable')
            }
            arr = [];
        })
    })
}
subtract();
addition();

let arr = [];
function maincunter(){
    arr = [];
    numbershowbtn.each(function(){
     let numberItems = $(this);
     let number = Number(numberItems.text())
     arr.push(number);
})
    let sum = arr.reduce(function(a,b){
        return a + b;
    })
  return sum - 1;
}


// passenger counter end