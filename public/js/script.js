
 const addImageToCart = (imageId, image) => {

   console.log("cookies =>" + document.cookie);

   document.cookie = imageId + "=" + image + ';expires=2592000000';
   const imgContainerCartButton = document.querySelector("#addImgBtn_" + imageId);
   imgContainerCartButton.innerText = "retirer du panier";
   imgContainerCartButton.setAttribute("onclick", `removeImageFromCart('${imageId}')`);

 }

const removeImageFromCart = (imageId) => {
  const path =  '"'+ getCookieValue(imageId) + '"';

  document.cookie = imageId + '=;' + 'MAX-AGE=0';

  const imgContainerCartButton = document.querySelector("#addImgBtn_" + imageId);

   imgContainerCartButton.innerText = "Ajouter au panier";
   imgContainerCartButton.setAttribute("onclick", `addImageToCart('${imageId}', '${path}')`);
}

const removeImageFromCartOnCartPage = (cookie) => {
  document.cookie = cookie + '=;' + 'MAX-AGE=0';
  document.getElementById(cookie + '_container').remove();
}

const getCookieValue = (cookie) => {

  let result = "not found";

  const cookieKeyValuePairStrings = document.cookie.split(";");

    cookieKeyValuePairStrings.forEach((cookieKeyValuePairString, i) => {

    const keyValuePairArray = cookieKeyValuePairString.split("=");

    let key = keyValuePairArray[0];
    let value = keyValuePairArray[1];

    if(key.charAt(0) === ' ') {
        key = key.substring(1);
    }


    if(parseInt(key, 10) === parseInt(cookie,10)) {

      result = value;
    }
  });

  return result;

}


const cookieCorrespondsToImage = (cookieId) => {

     if(cookieId.substring(0,3) === 'img' ){
        return true;
     }

    return false;
}

const displayCookieImages = () => {

   if(document.cookie.length === 0){
      return;
    }

    const imagesKeyValueStrings = document.cookie.split(";");

     imagesKeyValueStrings.forEach((imagesKeyValueString) => {

     const imagesKeyValueArray = imagesKeyValueString.split('=');

     let id = imagesKeyValueArray[0];
     let path = imagesKeyValueArray[1];

     if(id.charAt(0) === ' '){
        id = id.substring(1);
     }


     if(cookieCorrespondsToImage(id) === false){
         return;
     }


     const cartImg = document.createElement('img');

       cartImg.setAttribute('id', id);
       cartImg.setAttribute('class', 'mainImage');
       cartImg.setAttribute('src', path);
       cartImg.setAttribute('style', 'height: 300px; width: 300px;');

     const deleteButton = document.createElement('button');

       deleteButton.setAttribute('onclick', 'removeImageFromCartOnCartPage("' + id + '")');
       deleteButton.setAttribute('class', 'deleteCartButton');

       deleteButton.innerText = 'supprimer';

    const cartImgContainer = document.createElement('div');

        cartImgContainer.setAttribute('class','cartImgContainer');
        cartImgContainer.setAttribute('id',id + '_container');
        cartImgContainer.append(cartImg);
        cartImgContainer.append(deleteButton);

        document.getElementById('cartContainer').append(cartImgContainer);

     });
};




//home

const tryToFindEvent = () => {

  const searchValue = document.getElementById('eventInput').value;

  if(searchValue === ""){
    alert("Desolé, nous n avons pas trouvé votre évenement!");
  }

  fetch(`http://localhost:8888/AFB/search?searchValue=${searchValue}`).then(
    result => result.json()).then(
     result => {
        if(result.found === 'found'){
           window.location.href = `http://localhost:8888/AFB/event?name=${searchValue}`;
        } else {
           alert("Desolé, nous n avons pas trouvé votre évenement!");
        }
    });
}


//cart

const buyImages = () => {
  window.location.href = 'http://localhost:8888/AFB/mailForm';
}


//image download

const displayDownloadableContent = () => {

  const downloadableContentContainer = document.querySelector("#downloadableContentContainer");

  const imagesKeyValueStrings = document.cookie.split(";");

   imagesKeyValueStrings.forEach((imagesKeyValueString) => {

   const imagesKeyValueArray = imagesKeyValueString.split('=');

   let id = imagesKeyValueArray[0];
   let path = imagesKeyValueArray[1];

   const downloadableImage = document.createElement("a");

    downloadableImage.setAttribute("href", path);
    downloadableImage.setAttribute("download", "download");
    downloadableImage.innerText = "downloadImg";

    downloadableContentContainer.append(downloadableImage);

   });

}

const displayAddedImages = (event) => {

  // loop on cookies

  const imagesKeyValueStrings = document.cookie.split(";");

   imagesKeyValueStrings.forEach((imagesKeyValueString) => {

     const imagesKeyValueArray = imagesKeyValueString.split('=');
     let id = imagesKeyValueArray[0];

     if(id.charAt(0) === ' '){
       id = id.substring(1);
     }

     let imgButton =  document.getElementById(`addImgBtn_${id}`);



     if(imgButton){
       imgButton.innerText = 'retirer du panier';
       imgButton.setAttribute('onclick', `removeImageFromCart(${id})`);

     }

   });

  //point on certain ids
}

const sendMailIfValid = () => {

  let userMail = document.getElementById("userMailInput")?.value;
  let userMailConfirmation = document.getElementById("userMailConfirmationInput")?.value;

  if(userMail && userMailConfirmation && userMail !== userMailConfirmation){

     alert("mot de passes non identiques");
     return;
  }

  window.location.href = 'http://localhost:8888/AFB/create-checkout-session?numberOfElements=' + document.cookie.split(";").length + `&mail=${userMail}`;

}
