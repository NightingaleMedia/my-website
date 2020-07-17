const form = document.querySelector('.style-quiz--form');
const warningForm = document.querySelector('.style-quiz__validation')
const roomCheckboxes = document.querySelectorAll(`.room-checkbox[data-toggle="room-toggle"]`);
const submitButton = document.querySelector('.btn-finish');
const nextButton = document.querySelector(`.btn-next`);
const prevButton = document.querySelector(`.btn-previous`);

const allTabs = document.querySelectorAll(`.tab-pane`);
const allNavs = document.querySelectorAll(`.style-quiz__nav-link`);
const allInputs = document.querySelectorAll(`#user-details input`);

const userDetails = document.querySelector('#nav-link--user-details');
const success = document.querySelector('#success-notice')
// const navs = ['user-details', 'what-room', 'your-style', 'lighting-issue', 'existing-lighting', 'your-budget'];
let navN = 0;
let tabN = 0;

const updateButtons = () => {
  nextButton.classList.add('bg-info');
  if (navN == 0) {
    nextButton.classList.add('bg-info');
    prevButton.classList.remove('bg-info');
  }
  if (navN != 0 && navN != (allNavs.length - 1)) {
    prevButton.classList.add('bg-info');
    nextButton.classList.add('bg-info');
  }
  if (navN == allNavs.length - 1) {
    nextButton.classList.remove('bg-info');
  }
}

const updateHideShow = () => {
  allNavs.forEach(nav => {
    nav.classList.remove('show', 'active')
  })
  allTabs.forEach(tab => {
    tab.classList.remove('show', 'active')
  })
};

const showCurrent = () => {
  allTabs[tabN].classList.add('show', 'active')
  allNavs[navN].classList.add('show', 'active')
}

//find what has show and set them equal to that;
function updateCurrentWindow() {
  let i = 0;
  for (i; i < allNavs.length; i++) {
    if (allNavs[i].classList.contains('show')) {
      navN = i
      tabN = i;
    }
  }
  updateHideShow();
  showCurrent();
}

const nextPrev = (n) => {
  updateCurrentWindow();
  if(n == 1){ 
  tabN = (tabN == allTabs.length - 1)  ? tabN : tabN += n;
  navN = (navN == allNavs.length - 1)  ? navN : navN += n;
  }
  if(n == -1){
  tabN =  tabN == 0 ? tabN : tabN += n;
  navN =  navN == 0 ? navN : navN += n;
  }
  updateHideShow();
  showCurrent();
  updateButtons();
}

for (let p = 0; p < allNavs.length; p++) {
  allNavs[p].addEventListener('click', () => {
    navN = p;
    tabN = p;
    updateButtons();
  })
}

const validateUserDetails = () => {
  let numTrues = 0;
  allInputs.forEach(input => {
    if (input.parentElement.classList.contains('has-success')) {
      numTrues++;
    }
  })
  if (numTrues == allInputs.length) {
    userDetails.classList.add('completed')
  } else {
    userDetails.classList.remove('completed')
  }
  submitValidation();
}

const validateField = (field, regex) => {
  field.addEventListener('keyup', () => {
    if (regex.test(field.value)) {
      field.parentElement.classList.add('has-success');
    } else if (field.parentElement.classList.contains('has-success')) {
      field.parentElement.classList.remove('has-success')
    }
    validateUserDetails();
  })
}

const emailInput = document.querySelector(`#user-details input[name="email"]`)
validateField(emailInput, /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)

const mobileInput = document.querySelector(`#user-details input[name="Mobile"]`)
validateField(mobileInput, /^\d{7,15}$/);

const cityInput = document.querySelector(`#user-details input[name="city"]`)
validateField(cityInput, /\w/);

const stateInput = document.querySelector(`#user-details input[name="state"]`)
validateField(stateInput, /\w/);

const validateBoxes = (list, navItem) => {
  const b = list.querySelectorAll(`input[type="checkbox"]`)
  for (let i = 0; i <= b.length; i++) {
    if (b[i] && b[i].checked == true) {
      navItem.classList.add('completed')
      break;
    } else {
      navItem.classList.remove('completed')
    }
  }
}

const submitValidation = () => {
  let valid = false;
  let trues = 0;
  allNavs.forEach(nav => {
    validateNav = nav.classList.contains('completed');
    validateNav ? trues++ : trues;
    if (trues < allNavs.length) {
      submitButton.classList.remove('bg-info')
      valid = false;
    }
    while (trues == allNavs.length) {
      submitButton.classList.add("bg-info")
      valid = true;
      break;
    }
  })
  updateButtons();
  return valid;
}

const formNotFinished = ()=> {
  warningForm.classList.add('showValidation')
  setTimeout(() => { warningForm.classList.remove('showValidation')}, 2000)
}

nextButton.addEventListener('click', () => {
  nextPrev(1)
})
prevButton.addEventListener('click', () => {
  nextPrev(-1)
})

submitButton.addEventListener('click', () => {
  //validate the data
  if (submitValidation()) {
    submitButton.type = "submit";
    submitButton.value = "Submit";
    form.classList.add('d-none');
    success.classList.remove('d-none');
  } else {
  formNotFinished();
  };
});


const hiddenCheckbox = document.querySelectorAll('.hidden-checkbox')
hiddenCheckbox.forEach(hideIt => {
  hideIt.style = "opacity: 0;";
});

roomCheckboxes.forEach(checkbox => {
  checkbox.style = "cursor : pointer;";
  checkbox.addEventListener('click', () => {
    let checkboxInput = checkbox.querySelector(`input`);
    checkboxInput.value = checkbox.querySelector('p, h6, h4').innerText;
    value = "room-checked";
    const boxChecker = checkbox.firstElementChild;
    boxChecker.checked = !boxChecker.checked;
    var c = (boxChecker.checked == true) ? (checkbox.classList.add(`${value}`)) : (checkbox.classList.remove(`${value}`));
    const parentElement = boxChecker.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
    const theLink = document.querySelector(`#nav-link--${parentElement.id}`);
    validateBoxes(parentElement, theLink);
    submitValidation();
  });
});

updateButtons();
