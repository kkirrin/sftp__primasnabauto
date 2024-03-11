const deleteBr = () => {
    const brElements = document.querySelectorAll('.order__form br');
    console.log(brElements)
    brElements.forEach(br => {
        br.remove()
    });
}

deleteBr();