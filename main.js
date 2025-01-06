const btn = document.getElementById("sub");
const nameInput = document.getElementById("name");
const errorMsg = document.getElementById("error"); // შეტყობინების ელემენტი

// შეტყობინების დაფიქსირება ველში ცვლილებებისას
nameInput.addEventListener("input", () => {
    const name = nameInput.value.trim();
    if (name) {
        errorMsg.textContent = ""; // თუ ტექსტია, სუფთაა შეცდომის ველი
        btn.disabled = false; // ღილაკი აქტიურია
    } else {
        errorMsg.textContent = "Name is required."; // შეცდომის ტექსტი
        btn.disabled = true; // ღილაკი გამორთულია
    }
});

btn.addEventListener("click", () => {
    const name = nameInput.value.trim();
    alert(`Reservation confirmed for ${name}.`);
});



// const btn1 = document.querySelector('.btn1'); // სწორი ცვლადი
const modal = document.querySelector('#modal');
const ads = document.querySelector('#ads');
const lay = document.querySelector('#overlay');
const a = document.querySelector('#sas');
// აქ სწორად გამოვიყენოთ btn1
a.addEventListener("click", () => {
    modal.style.display = "flex";
    lay.style.display = "flex";
});

const clossmodall = (element, first, second) => {
    element.addEventListener("click", () => {
        first.style.display = "none";
        second.style.display = "none";
    });
};

// მოდალის დახურვა
clossmodall(ads, modal, lay);
clossmodall(lay, modal, lay);



// const section2 =document.querySelector("#section2")

// const href =document.querySelector(".sss")


// href.addEventListener("click", (e) => {
//     e.preventDefault(); // შეწყვეტს ლინკის ნაგულისხმევ ქმედებას
//     section2.style.display = "flex";
// });