function show(val)
{
	if(val=="select")
	{
		document.getElementById('divtextbox').style.display = 'none';
		document.getElementById('div'+val).style.display = '';
	}
	else
	{
		document.getElementById('divselect').style.display = 'none';
		document.getElementById('div'+val).style.display = '';
	}
}

function removeChar(item)
{ 
	var val = item.value;
  	val = val.replace(/[^0-9]/g, "");  
  	if (val == ' '){val = ''};   
  	item.value=val;
}

function test()
{
	alert();
	//document.write('Mujib');
}

