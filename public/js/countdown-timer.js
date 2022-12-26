var myopt = document.querySelectorAll(".otpinput");
for (var i = 0; i < myopt.length - 1; i++) {
myopt[i].addEventListener("keyup", function () {
this.nextElementSibling.focus();
})
}
let timerOn =true;
function timer (remaining){
var m = Math.floor(remaining / 60);
var s = remaining % 60;
m = m < 10 ? '0'+ m : m;
s = s < 10 ? '0'+ s: s;
document.getElementById("countdown-timer").innerHTML=`المدة المتبقية: ${m}: ${s}`;
remaining -=1;
if(remaining >= 0 && timerOn){
setTimeout(function(){
timer (remaining);
}, 1000);
document.getElementById("resend").innerHTML='';
return;
}
if(!timerOn){
    return;
}
// document.getElementById("resend").innerHTML=`Dont't recieve the code ?<span class="font-weight-bold text-color cursor" ${onclick=timer(60)}>Resend</span>`
}
timer(30);
//First will select all inputfield

  // searching: false,
//       "dom": 'rtip',

//     "language": {
// "decimal":        "",
//     "emptyTable":     "لاتوجد بيانات متاحة في الجدول",
//     "info":           "اظهار _START_ من _END_ الي _TOTAL_ الخلايا",
//     "infoEmpty":      "اظهار 0 الي 0 من 0 مدخلات",
//     "infoFiltered":   "(filtered from _MAX_ total entries)",
//     "infoPostFix":    "",
//     "thousands":      ",",
//     "lengthMenu":     "اظهار _MENU_ خلايا",
//     "loadingRecords": "تحميل...",
//     "processing":     "",
//     "search":         "بحث",
//     "zeroRecords":    "لايوجد حقول متطابقة",
//     "paginate": {
//         "first":      "",
//         "last":       "الاخير",
//         "next":       "التالي",
//         "previous":   "السابق"
//     },
//     "aria": {
//         "sortAscending":  ": activate to sort column ascending",
//         "sortDescending": ": activate to sort column descending"
//     }

    

//   }





