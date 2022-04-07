function dropDown() 
{
    document.getElementById("js--dropdown").classList.toggle("show");
}

function filter(ref, account_page = false, role = "account")
{
    if(!account_page)
    {
        avaible_array = ["games", "tools", "books", "electronics", "films", "other"];
    } else if (account_page && role == "account")
    {
        avaible_array = ["lending", "borrowing", "reviews"];
    } else
    {
        avaible_array = ["lending", "borrowing", "reviews", "bh", "rmi"];
    }

    if (ref != "all")
    {
        avaible_array.forEach(element => {
            if(element != ref && element != null)
            {
                var element_array = document.getElementsByClassName(element);
                try
                {
                    for(i = 0; i < element_array.length; i++) 
                    {
                        element_array[i].style.display = 'none';
                    }
                } catch (error){}
            } else if (element == ref && element != null)
            {
                var element_array = document.getElementsByClassName(element);
                try
                {
                    for(i = 0; i < element_array.length; i++) 
                    {
                        element_array[i].style.display = 'grid';
                    }
                } catch (error){}
            }
        });
    } else
    {
        avaible_array.forEach(element => {
            var element_array = document.getElementsByClassName(element);
            try
            {
                for(i = 0; i < element_array.length; i++) 
                {
                    element_array[i].style.display = 'grid';
                }
            } catch (error){}
        });
    }
}