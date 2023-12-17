// const textWrappers = document.querySelectorAll(".animated_text");
// const arr = [0, 12, 24, 35, 50];
// let i = 1;

// for (let textWrapper of textWrappers) {
//   textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

//   anime
//     .timeline({ loop: true })
//     .add({
//       targets: `.animated_text--${i} .letter`,
//       scale: [4, 1],
//       opacity: [0, 1],
//       translateZ: 0,
//       easing: "easeOutExpo",
//       duration: (el, j, l) => 5000 - 100 * (arr[i - 1] + j),
//       delay: (el, j, l) => 100 * (arr[i - 1] + j),
//     })
//     .add({
//       targets: `.animated_text--${i}`,
//       opacity: 1,
//       easing: "easeOutExpo",
//       duration: 1000,
//       delay: 1000,
//     });
//   i++;
// }

function setupTypewriter(t) {
  var HTML =
    "<span>- Investment</span>\n\
    <span>- Monitoring</span>\n\
    <span>- Insurance</span>\n\
    <span>- Entertainment</span>";

  t.innerHTML = "";

  var cursorPosition = 0,
    tag = "",
    writingTag = false,
    tagOpen = false,
    typeSpeed = 100, // higher number = slower
    tempTypeSpeed = 0;

  var type = function () {
    if (writingTag === true) {
      tag += HTML[cursorPosition];
    }

    if (HTML[cursorPosition] === "<") {
      tempTypeSpeed = 0;
      if (tagOpen) {
        tagOpen = false;
        writingTag = true;
      } else {
        tag = "";
        tagOpen = true;
        writingTag = true;
        tag += HTML[cursorPosition];
      }
    }
    if (!writingTag && tagOpen) {
      tag.innerHTML += HTML[cursorPosition];
    }
    if (!writingTag && !tagOpen) {
      if (HTML[cursorPosition] === " ") {
        tempTypeSpeed = 0;
      } else {
        tempTypeSpeed = Math.random() * typeSpeed + 50;
      }
      t.innerHTML += HTML[cursorPosition];
    }
    if (writingTag === true && HTML[cursorPosition] === ">") {
      tempTypeSpeed = Math.random() * typeSpeed + 50;
      writingTag = false;
      if (tagOpen) {
        var newSpan = document.createElement("span");
        t.appendChild(newSpan);
        newSpan.innerHTML = tag;
        tag = newSpan.firstChild;
      }
    }

    if (cursorPosition < HTML.length - 2) {
      cursorPosition++;
    } else {
      cursorPosition = 0;
      t.innerHTML = "";
    }
    setTimeout(type, tempTypeSpeed);
  };

  return {
    type: type,
  };
}

var typer = document.getElementById("typewriter_1");
typer = setupTypewriter(typer);
typer.type();
