<?php
/*
* This is use to display Footer
*/
?>
    <div class="footer-section">
      <div class="container">
        <div class="online-section">
          <div class="time-zone">
            <img src="https://new.tek2d.com/wp-content/uploads/2024/07/bi_globe.png" alt="">
            <span>
              Offline
            </span>
          </div>
          <p>
            Your company is ready for big moves<br>
            and we are here for it. Turn bold ideas<br>
            into an impactful brand.
          </p>
        </div>
        <div class="footer-text">
          <h6>
            Tek2d
          </h6>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all <li> elements
    var btns = document.querySelectorAll(".navbar .menu-header-menu-container ul li a");

    // Add 'active' class to the first <li> by default
    if (btns.length > 0) {
        btns[0].classList.add("active");
    }

    // Add click event listeners to all <li> elements
    btns.forEach(function(e) {
        e.addEventListener('click', function() {
            // Remove 'active' class from all <li> elements
            btns.forEach(function(btn) {
                btn.classList.remove("active");
            });

            // Add 'active' class to the clicked <li> element
            e.classList.add("active");
        });
    });
});

// --------member-ships--------tabs----
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

// -----footer-----
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

// -----------------------time---------------------zone-----------------
function updateTimeZoneStatus() {
    const now = new Date();
    const dayOfWeek = now.getDay(); // 0 (Sunday) to 6 (Saturday)
    const hour = now.getHours();

    // Check if it's Monday to Friday and between 9 AM to 6:00 PM (18:00)
    if (dayOfWeek >= 1 && dayOfWeek <= 5 && hour >= 9 && hour < 18) {
        const timeZoneDiv = document.querySelector('.time-zone');
        const span = timeZoneDiv.querySelector('span');

        span.textContent = 'Online';
        timeZoneDiv.classList.add('online');
    } else {
        const timeZoneDiv = document.querySelector('.time-zone');
        const span = timeZoneDiv.querySelector('span');

        span.textContent = 'Offline';
        timeZoneDiv.classList.remove('online');
    }
}

// Call the function initially to set the status based on current time
updateTimeZoneStatus();

// Update every minute to adjust the status dynamically
setInterval(updateTimeZoneStatus, 60000); // Every minute (60000 milliseconds)

// ---------------------------bricks--------------------------------
document.addEventListener('DOMContentLoaded', function() {
    const bricks = document.querySelectorAll('.breakes-section .brik');

    bricks.forEach(brik => {
        brik.style.position = 'absolute';
        brik.style.cursor = 'grab';

        brik.addEventListener('mousedown', function(event) {
            brik.classList.add('dragging');
            brik.style.zIndex = '1000';
            const shiftX = event.clientX - brik.getBoundingClientRect().left;
            const shiftY = event.clientY - brik.getBoundingClientRect().top;

            function moveAt(pageX, pageY) {
                brik.style.left = pageX - shiftX + 'px';
                brik.style.top = pageY - shiftY + 'px';
            }

            moveAt(event.pageX, event.pageY);

            function onMouseMove(event) {
                moveAt(event.pageX, event.pageY);
            }

            document.addEventListener('mousemove', onMouseMove);

            brik.addEventListener('mouseup', function() {
                document.removeEventListener('mousemove', onMouseMove);
                brik.classList.remove('dragging');
                brik.style.zIndex = '';
            }, { once: true });
        });

        brik.ondragstart = function() {
            return false;
        };
    });
});

// Function to initialize animation and interaction
function initAnimation() {
    const collection = document.getElementsByClassName("breakes");
    var vector = new Two.Vector();
    var entities = [];
    var mouse;
    var copy = [
        "Web",
        "Branding",
        "Product",
        "Messaging",
        "UI/UX Design"
    ];

    var two = new Two({
        type: Two.Types.canvas,
        width: collection[0].offsetWidth,
        height: collection[0].offsetHeight,
        autostart: true
    }).appendTo(collection[0]);

    var solver = Matter.Engine.create();
    solver.world.gravity.y = 1;

    var bounds = {
        length: collection[0].offsetWidth, // Adjust to .breakes width
        thickness: 50,
        properties: {
            isStatic: true
        }
    };

    bounds.left = createBoundary(bounds.thickness, bounds.length);
    bounds.right = createBoundary(bounds.thickness, bounds.length);
    bounds.bottom = createBoundary(bounds.length, bounds.thickness);

    Matter.World.add(solver.world, [
        bounds.left.entity,
        bounds.right.entity,
        bounds.bottom.entity
    ]);

    var defaultStyles = {
        size: two.width * 0.08,
        weight: 400,
        fill: "white",
        leading: two.width * 0.08 * 0.8,
        family: "FKDisplayTrial, Arial, sans-serif", // Adjust font stack
        alignment: "center",
        baseline: "baseline",
        margin: {
            top: 0,
            left: 0,
            right: 0,
            bottom: 0
        }
    };

    addSlogan();
    resize();
    mouse = addMouseInteraction();
    two.bind("resize", resize).bind("update", update);

    function addMouseInteraction() {
        var mouse = Matter.Mouse.create(two.renderer.domElement);
        var mouseConstraint = Matter.MouseConstraint.create(solver, {
            mouse: mouse,
            constraint: {
                stiffness: 0.2
            }
        });

        Matter.World.add(solver.world, mouseConstraint);

        return mouseConstraint;
    }

    function resize() {
        var length = bounds.length;
        var thickness = bounds.thickness;

        vector.x = -thickness / 2;
        vector.y = two.height / 2;
        Matter.Body.setPosition(bounds.left.entity, vector);

        vector.x = two.width + thickness / 2;
        vector.y = two.height / 2;
        Matter.Body.setPosition(bounds.right.entity, vector);

        vector.x = two.width / 2;
        vector.y = two.height + thickness / 2;
        Matter.Body.setPosition(bounds.bottom.entity, vector);

        for (var i = 0; i < two.scene.children.length; i++) {
            var child = two.scene.children[i];

            if (!child.isWord) {
                continue;
            }

            var rectangle = child.rectangle;
            var entity = child.entity;

            switch (child.text.value.toLowerCase()) {
                case "web":
                    rectangle.width = 258;
                    rectangle.height = 121;
                    Matter.Body.scale(entity, 1 / entity.scale.x, 1 / entity.scale.y);
                    Matter.Body.scale(entity, 258, 121);
                    entity.scale.set(258, 121);
                    break;
                case "branding":
                    rectangle.width = 436;
                    rectangle.height = 121;
                    Matter.Body.scale(entity, 1 / entity.scale.x, 1 / entity.scale.y);
                    Matter.Body.scale(entity, 436, 121);
                    entity.scale.set(436, 121);
                    break;
                case "product":
                    rectangle.width = 400;
                    rectangle.height = 121;
                    Matter.Body.scale(entity, 1 / entity.scale.x, 1 / entity.scale.y);
                    Matter.Body.scale(entity, 400, 121);
                    entity.scale.set(400, 121);
                    break;
                case "messaging":
                    rectangle.width = 525;
                    rectangle.height = 121;
                    Matter.Body.scale(entity, 1 / entity.scale.x, 1 / entity.scale.y);
                    Matter.Body.scale(entity, 525, 121);
                    entity.scale.set(525, 121);
                    break;
                case "ui/ux design":
                    rectangle.width = 538;
                    rectangle.height = 121;
                    Matter.Body.scale(entity, 1 / entity.scale.x, 1 / entity.scale.y);
                    Matter.Body.scale(entity, 538, 121);
                    entity.scale.set(538, 121);
                    break;
            }
        }
    }

    function addSlogan() {
        var x = defaultStyles.margin.left;
        var y = -two.height;

        for (var i = 0; i < copy.length; i++) {
            var word = copy[i];
            var group = new Two.Group();
            var text = new Two.Text(word, 0, 0, defaultStyles);
            var rectangle = new Two.Rectangle(0, 0, text.getBoundingClientRect().width + 20, text.getBoundingClientRect().height + 20);

            group.add(rectangle);
            group.add(text);
            group.translation.set(two.width / 2, two.height / 2);

            group.noStroke().fill = "#1E1E1E";

            text.fill = "white";

            var entity = Matter.Bodies.rectangle(two.width / 2, two.height / 2, rectangle.width, rectangle.height);
            Matter.Body.setInertia(entity, Infinity);

            Matter.World.add(solver.world, entity);
            group.entity = entity;
            group.rectangle = rectangle;
            group.text = text;
            group.isWord = true;

            entities.push(group);
            two.add(group);
        }
    }

    function update() {
        var px = two.width / 2;
        var py = two.height / 2;

        for (var i = 0; i < entities.length; i++) {
            var entity = entities[i].entity;
            var group = entities[i];

            var position = group.entity.position;

            group.translation.set(
                position.x,
                position.y
            );

            group.rotation = group.entity.angle;
        }

        Matter.Engine.update(solver);
    }

    function createBoundary(width, height) {
        var entity = Matter.Bodies.rectangle(0, 0, width, height, bounds.properties);

        return {
            entity: entity,
            width: width,
            height: height
        };
    }
}

// -----------------parallax effect------------------
document.addEventListener('DOMContentLoaded', function() {
    const paralexElements = document.querySelectorAll('.paralex'); // Assuming it's a class
    const aboutSection = document.querySelector('.about');

    function centerElements() {
        paralexElements.forEach(el => {
            el.style.transform = 'translate(-50%, -50%)';
            el.style.left = '50%';
            el.style.top = '50%';
        });
    }

    function spreadElements(progress) {
        const screenWidth = window.innerWidth;
        const screenHeight = window.innerHeight;

        paralexElements.forEach((el, index) => {
            const angle = (index / paralexElements.length) * 2 * Math.PI;
            const x = (screenWidth / 3.2) * Math.cos(angle) * progress;
            const y = (screenHeight / 3) * Math.sin(angle) * progress;

            el.style.transform = `translate(${x}px, ${y}px)`;
            el.style.left = '42.5%';
            el.style.top = '41%';
        });
    }

    function handleScroll() {
        const scrollTop = window.scrollY;
        const sectionTop = aboutSection.offsetTop;
        const sectionHeight = aboutSection.offsetHeight;
        const windowHeight = window.innerHeight;

        if (scrollTop + windowHeight > sectionTop - 50 && scrollTop < sectionTop + sectionHeight) {
            const distanceInSection = Math.min(scrollTop + windowHeight - sectionTop + 50, sectionHeight);
            const progress = Math.min(distanceInSection / sectionHeight, 1);
            spreadElements(progress);
        } else if (scrollTop + windowHeight <= sectionTop - 50) {
            centerElements();
        } else if (scrollTop >= sectionTop + sectionHeight) {
            spreadElements(1);
        }
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Call once to set initial positions
});

</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/matter-js@0.14.2/build/matter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/two.js@v0.7.0-stable.1/build/two.js"></script>
</body>
</html>