document.addEventListener("DOMContentLoaded", () => {

    // Input Nilai
    const btn = document.querySelector(".submit-nilai")
    const web = document.querySelector(".web")
    const kalkulus = document.querySelector(".kalkulus")
    const inggris = document.querySelector(".inggris")
    const mobile = document.querySelector(".mobile")

    btn.addEventListener("click", () => {
        document.querySelector(".na-web").innerHTML = web.value
        document.querySelector(".na-kalkulus").innerHTML = kalkulus.value
        document.querySelector(".na-inggris").innerHTML = inggris.value
        document.querySelector(".na-mobile").innerHTML = mobile.value

        const nmWeb = nilaiMutu(web.value)
        const nmKalkulus = nilaiMutu(kalkulus.value)
        const nmInggris = nilaiMutu(inggris.value)
        const nmMobile = nilaiMutu(mobile.value)

        document.querySelector(".nm-web").innerHTML = nmWeb
        document.querySelector(".nm-kalkulus").innerHTML = nmKalkulus
        document.querySelector(".nm-inggris").innerHTML = nmInggris
        document.querySelector(".nm-mobile").innerHTML = nmMobile

        document.querySelector(".ipk").innerHTML = ipk(nmWeb, nmKalkulus, nmInggris, nmMobile);
    })

    maxNumber = (val) => {
        if (Number(val.value) > 100) {
            val.value = 100
        }
    }
})

const nilaiMutu = (nilai) => {
    if (nilai >= 90 && nilai <= 100) {
        return "A"
    } else if (nilai >= 80 && nilai <= 89) {
        return "B"
    } else if (nilai >= 70 && nilai <= 79) {
        return "C"
    } else if (nilai >= 60 && nilai <= 69) {
        return "D"
    } else {
        return "E"
    }
}

const ipk = (a, b, c, d) => {
    const arr = [a, b, c, d];

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] === "A") {
            arr[i] = 4
        } else if (arr[i] === "B") {
            arr[i] = 3
        } else if (arr[i] === "C") {
            arr[i] = 2
        } else if (arr[i] === "D") {
            arr[i] = 1
        } else {
            arr[i] = 0
        }
    }

    const total = arr.reduce((a, b) => a + b);

    return total / arr.length;
}