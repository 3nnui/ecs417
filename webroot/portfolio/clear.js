
window.onload = function clear()

{
    let input = document.getElementById("clear-but");
    input.addEventListener("click", con);


    function con()
    {
      if(confirm("Are you sure you want to clear?"))
      clearAll();
    }
    function clearAll()
    {
      clearTitle();
      clearContent();
    }
    function clearTitle()
    {
      let title = document.getElementById("add_title");
    title.value = "";
    }

    function clearContent()
    {
      let content = document.getElementById("content_box");
      content.value = "";
    }
}

check();
function check()
{
  let post = document.getElementById("post");
  post.addEventListener("click", checkBoth);
}

function checkBoth()
{
  checkTitle();
  checkContent();
}

function checkTitle()
{
  let check_title = document.getElementById("add_title");
  let title_empty = document.getElementById("title_empty");
  if(check_title.value==="")
  {
    event.preventDefault();
    console.log("Didn't fill 'Title' Box'");
    check_title.style.backgroundColor = "red";
    title_empty.innerText = "Please fill the Title Box";
  }
}

function checkContent()
{
  let content = document.getElementById("content_box");
  let content_empty = document.getElementById("content_empty");
  if(content.value ==="")
  {
    event.preventDefault();
    console.log("Didn't fill 'Content' Box'");
    content_empty.innerText = "Please fill the Content Box";
    content.style.backgroundColor = "red";
  }
}
