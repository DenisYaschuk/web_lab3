window.onload  = function() {
    let amountOfBlocks = prompt("How many blocks do you want your Accordion to have?");
    var jsonResult = [];
    var accordionItems = "";
    var accordionItemsCount = 0;
    if(amountOfBlocks>0){
        for(let i=1; i<=amountOfBlocks; i++){
            let title = prompt(`Whats the title of the block ${i}?`);
            let content = prompt(`Whats the content of the block ${i}?`);
            jsonResult.push({"title": title,
                            "content": content
                            });
            accordionItemsCount++;
            accordionItems += `<div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${accordionItemsCount}" aria-expanded="true" aria-controls="collapse${accordionItemsCount}">
                ${title}
              </button>
            </h2>
            <div id="collapse${accordionItemsCount}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              ${content}
              </div>
            </div>
          </div>`;
        }
        let unique_user_id = document.cookie.match(/PHPSESSID=[^;]+/)[0].substring(10);
        let block4 = document.getElementById('block4');
        let AccordionText = `<div class="accordion" id="accordionExample">
            ${accordionItems}
        </div>`;
        block4.insertAdjacentHTML('beforeend',AccordionText);
        jsonResult = JSON.stringify(jsonResult);
        $.ajax({
            url: 'addAccordionToDb.php',
            type: 'POST',
            data: {ajax: true, unique_user_id: unique_user_id, jsonResult: jsonResult},
            success: function (result) {
                console.log(result);
                result = JSON.parse(result);
                console.log(result);
        
                if (result.error == 1) {
                    alert('Something went wrong with adding data.');
                } else if (result.error == 0) {
                    alert('Congratulations you shoud see your Accordion soon.');
                }
            }
        });
    }
    else{
        alert("Your imput couldn't be specified as a number. Pleas try again after reloading this page.");
    }
}
    