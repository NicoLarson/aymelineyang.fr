document.addEventListener('DOMContentLoaded', () => {
    const menuList = document.querySelector("#menuList")
    const businessDeveloper = document.querySelector("#buisnessDeveloper")
    const graphicDesigner = document.querySelector("#graphicDesigner")
    const weddingPlanner = document.querySelector("#weddingPlanner")
    const returnBtn = document.querySelector(".fa-arrow-alt-circle-left")

    const businessDeveloperBtn = document.querySelector("#businessDeveloperBtn")
    const graphicDesignerBtn = document.querySelector("#graphicDesignerBtn")
    const weddingPlannerBtn = document.querySelector("#weddingPlannerBtn")

    businessDeveloperBtn.addEventListener('click', () => {
        businessDeveloper.classList.remove('disapear')
        menuList.classList.add('disapear')
        returnBtn.classList.remove('disapear')
    })

    graphicDesignerBtn.addEventListener('click', () => {
        graphicDesigner.classList.remove('disapear')
        menuList.classList.add('disapear')
        returnBtn.classList.remove('disapear')
    })

    weddingPlannerBtn.addEventListener('click', () => {
        weddingPlanner.classList.remove('disapear')
        menuList.classList.add('disapear')
        returnBtn.classList.remove('disapear')
    })

    returnBtn.addEventListener('click', () => {
        menuList.classList.remove('disapear')
        businessDeveloper.classList.add('disapear')
        graphicDesigner.classList.add('disapear')
        weddingPlanner.classList.add('disapear')
        returnBtn.classList.add('disapear')
    })





})