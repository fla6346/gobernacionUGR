let notifications=document.querySelector('.notifications');
let success=document.getElementById('success');
let error=document.getElementById('error');
let warning= document.getElementById('warning');
let info=document.getElementById('info');


function createToast(type,icon,title,text){
  let newToast= document.createElement('div');
  newToast.innerHTML=`
  <div class="toast ${type}">
        <i class="${icon}"></i>
        <div class="content">
          <div class="title">${title}</div>
          <span>${text}</span>
      </div>
  </div>`;
  notifications.appendChild(newToast);
  newToast.timeOut=setTimeout(()=>newToast.remove(),5000);
}
  if(success){

success.onclick=function(){
  let type='sucess';
  let icon='fa-solid fa-circle';
  let title='Success';
  let text='this is success';
  createToast(type,icon,title,text)
};
  }
  if (error) {
    error.onclick = function() {
        let type = 'error';
        let icon = 'fa-solid fa-circle-xmark';
        let title = 'Error';
        let text = 'This is an error';
        createToast(type, icon, title, text);
    };
}

