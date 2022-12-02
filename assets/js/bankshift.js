const bankname = document.querySelector('#bankname')
const writeup = document.querySelector('#writeup')
const interviewsum = document.querySelector('#interviewsum')
const banklogo = document.querySelector(".banklogo")
const writtencont = document.querySelector(".writtencont")
const notescont = document.querySelector(".notescont")
const contactcont = document.querySelector(".contactcont")
const homepage = document.querySelector(".homepage")



class NewBank {
    constructor(bankname,bankid){
        this.bankname = bankname;
        this.bankid = bankid;
        this.switchtothis = function(){
            this.button = document.querySelector("#"+this.bankid);
            this.button.onclick = () =>{
                bankname.innerHTML = this.bankname;
                writeup.innerHTML = "";
                interviewsum.innerHTML = "";
            }
        }
    }
}

var bankidlistarray = ['allenco','bankofamerica','barclays','bmo','centerview','citibank','cowen','creditsuisse','deutschebank','evercore','financo','goldmansachs','greenhill','guggenheim','houlihanlokey','jefferies','jpmorgan','lazard','liontree','macquarie','mizuho','mkleinco','moelis','morganstanley','perellaweinberg','pipersandler','pjt','qatalystpartners','raine','rbc','rothschild','solomonpartners','ubs','williamblair'] 

// Manipulate this below!!!
// Create an OG PAGE with elements explaining how to use this page!
$(document)
.on('click', ".switch", function(event) {
    scroll(0,0)
    var thisid = $(this).attr("id");
    var thistitle = $(this).attr("value");
    if(!bankidlistarray.includes(thisid)){
        bankname.innerHTML = thistitle;
        writtencont.style.display = "none";
        banklogo.style.display = "none";
        notescont.style.display = "block";
        contactcont.style.display = "block";
        homepage.style.display = "none";
    } else{
        writtencont.style.display = "block";
        banklogo.style.display = "block";
        notescont.style.display = "block";
        contactcont.style.display = "block";
        homepage.style.display = "none";
    }
})



const rothschild_button = document.querySelector('#rothschild')
rothschild_button.onclick = () =>{
    bankname.innerHTML = "Rothschild"
    writeup.innerHTML = "Rothschild, first founded in the early 1800’s, is one of Europe’s most well known brands and a leader in the industry. In the US, Rothschild operates as a boutique bank, complimenting their European division but also sourcing their own deal flow. As a boutique Rothschild’s typical recruiting class is anywhere from 15-25 analysts, and does not necessarily target any schools in particular. Rothschild takes pride in their culture as a historically “family-owned” enterprise. This allows them to not manage quarter to quarter making them resistant to recession. In terms of deal flow, Rothshchild covers all categories of banking, and its restructuring division is particularly strong. Additionally, Rothschild offers a rotational summer program allowing analysts to sit on three desks throughout their summer."
    interviewsum.innerHTML = "As mentioned above, Rothschild does not necessarily target Michigan or place a heavy emphasis on networking calls. Instead they rely on technical interviews followed by interviews with management to determine a candidate's standing. The technical portion of Rothschild’s interview is focused on understanding rather than memorization."
    banklogo.src = "../finalmlu/images/banklogos/rothschild.jpg"
}

const moelis_button = document.querySelector('#moelis')
moelis_button.onclick = () =>{
    bankname.innerHTML = "Moelis"
    writeup.innerHTML = "Moelis is a prestigious boutique firm. They dominate the middle market which results in extremely high deal volume, leading to all analysts having no shortage of live deal experience. When Moelis came to Michigan, it was evident that their blue roots run deep. Michigan is their most represented school in each analyst class, and they prioritize their time recruiting students in Ann Arbor. Their analysts are personable, yet extremely gritty, hard working and go-getting, which is representative of their entire firm culture - Moelis is known for being one of the hardest working firms with tough hours. Interns and analysts work extremely closely with their MD’s, which is a huge part of Moelis’s top-notch education, and this leads to a vast majority of Moelis analysts funneling into PE firms after two years on the job."
    interviewsum.innerHTML = "The Moelis recruiting process was much more technical than other firms'. Though technical, each interview tested overarching ideas, instead of ticky-tacky questions on the BIWS guides. Networking is also extremely important and prioritized at Moelis. Through networking calls, it is important to show analysts more personable and conversational skills. Being able to connect with analysts is necessary before the door to an interview opens, which is where the technical side of the process is tested."
    banklogo.src = "../finalmlu/images/banklogos/moelis.jpg"
}

//NEED INFO//
const allen_button = document.querySelector('#allenco')
allen_button.onclick = () =>{
    bankname.innerHTML = "Allen & Co"
    writtencont.style.display = "block"
    writeup.innerHTML = "N/A"
    interviewsum.innerHTML = "N/A"
    banklogo.src = "../finalmlu/images/banklogos/allenco.jpg"
}

const bofa_button = document.querySelector('#bankofamerica')
bofa_button.onclick = () =>{
    bankname.innerHTML = "Bank of America"
    writeup.innerHTML = "Bank of America is a bulge bracket bank well known for their global advisory services across the US. After acquiring Merryl Lynch in 2009, Bank of America gained invaluable connections across the business world, and used these connections to become a leader in the investment banking world, namely: healthcare, TMT, and financial sponsors. With that said, BOFA still spans across nearly all industry sectors. Bank of America places a heavy emphasis on recruiting from Michigan, and has an extremely strong Michigan presence within their TMT division. Culturally, BOFA is well known for their culture featuring a lack of Ivy League graduates."
    interviewsum.innerHTML = "Bank of America is one of the more hands-on recruiting processes in comparison to other banks. Last year, Bank of America set up a table at the winter garden in January, came to campus for a typical information session, and had an invite only dinner in Ann Arbor. These opportunities to network coupled with outside networking calls and a hirevue determine qualifications for a superday. Networking definitely holds a strong weight in the BofA recruiting process. The superday was standard for a large bulge-bracket firm; including 3 interviews with a mix of behaviorals and technicals."
    banklogo.src = "../finalmlu/images/banklogos/bofa.png"
}

const barclays_button = document.querySelector('#barclays')
barclays_button.onclick = () =>{
    bankname.innerHTML = "Barclays"
    writeup.innerHTML = ""
    interviewsum.innerHTML = ""
    banklogo.src = "../finalmlu/images/banklogos/barclays.jpg"
}