function Reset()
{
  document.getElementById("ITEM1Q").value = "";
  document.getElementById("ITEM2Q").value = "";
  document.getElementById("ITEM3Q").value = "";

  document.getElementById("USERNAME").value = "";
  document.getElementById("PASSWORD").value = "";

  document.getElementById("Ship1").checked = false;
  document.getElementById("Ship2").checked = false;
  document.getElementById("Ship3").checked = false;
}

function CheckValidity()
{
  let Q1 = document.getElementById("ITEM1Q").value;
  let Q2 = document.getElementById("ITEM2Q").value;
  let Q3 = document.getElementById("ITEM3Q").value;

  let username = document.getElementById("USERNAME").value;
  let password = document.getElementById("PASSWORD").value;

  let Ship1 = document.getElementById("Ship1").checked;
  let Ship2 = document.getElementById("Ship2").checked;
  let Ship3 = document.getElementById("Ship3").checked;

  if(Q1 < 0)
  {
    window.alert("Please enter a value greater than or equal to 0 for Item 1.");
    return false;
  }
  if(Q2 < 0)
  {
    window.alert("Please enter a value greater than or equal to 0 for Item 2.");
    return false;
  }
  if(Q3 < 0)
  {
    window.alert("Please enter a value greater that or equal to 0 for Item 3.");
    return false;
  }
  if(Q1 == "")
  {
    window.alert("Please enter a quantity for Item 1.");
    return false;
  }
  if(Q2 == "")
  {
    window.alert("Please enter a quantity for Item 2.");
    return false;
  }
  if(Q3 == "")
  {
    window.alert("Please enter a quantity for Item 3.");
    return false;
  }
  if(Q1 + Q2 + Q3 == 0)
  {
    window.alert("You need to have at least one item to checkout.");
    return false;
  }
  if(!ValidEmail(username))
  {
    window.alert("Please enter a valid username email.");
    return false;
  }
  if(password.length < 8)
  {
    window.alert("Please enter a password 8 characters or longer.");
    return false;
  }
  if(!(Ship1 || Ship2 || Ship3))
  {
    window.alert("Please select a shipping method.");
    return false;
  }

  return true;
}

function ValidEmail(email)
{
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);
}
