
function setColor(btn){
 var property = document.getElementById(btn);
 var col_ =  property.style.backgroundColor;
 if (col_=="orange"){
       property.style.backgroundColor = "white";
       property.style.color = "orange";
  }
 else	
  {
       property.style.backgroundColor = "orange";
       property.style.color = "white";
       
  }

}

function getID(){
var ids = ["A101","A102","A103","A104","A105","A106","B101","B102","B103","B104","B105","B106","C101","C102","C103","C104","C105","C106"];
var i;
var str = "";
var f = document.getElementById("f1");
var comma = ",";
for(i=0;i<ids.length;i++)
{
if(i==ids.length-1)
 {
  comma = " ";
 }
  var property = document.getElementById(ids[i]);
  if(property.style.backgroundColor=="orange")
{
    str = str + property.id+comma;
}
}

f.elements['classes'].value=str;
}


function showmap(count,list)
{
var modal = document.getElementById('myModal');
modal.style.display = "block";
var  i= 0;
var listA = list.split(",");
var start = 1;
for(i=0;i<30;i++)
{
 var td_ = document.getElementById(start);
 td_.style.backgroundColor="grey";
 td_.innerHTML = "--------------";
 start = start+1;
}


start=1;
for(i=0;i<count;i++)
{
 var td_ = document.getElementById(start);
 td_.style.backgroundColor="#3385ff";
 td_.innerHTML = listA[i];
 start = start+1;
}



}
