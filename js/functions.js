function RemoveImage()
{
    
    var element = document.getElementById("healthyimage");
    element.parentNode.removeChild(element);

}

function CheckInput()
{

    let inputField = document.getElementById('input').value;
    if(inputField == null)
    {

        alert("Das Feld ist leer");
    }


}