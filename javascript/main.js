$(document).ready(function() {
  $(".js-enabled").show();
  $("gradient").each(function() {
    let gradient = $(this).attr("colors");
    let colors = gradient.split(",");
    let speed = $(this).attr("speed")
    speed = speed != null ? speed : "2s";

    let direction = $(this).attr("direction");
    direction = direction!= null? direction : "right";

    $(this).css({
      "background": `linear-gradient(to ${direction}, ${colors.join(",")})`,
      "-webkit-background-clip": "text",
      "background-clip": "text",
      "-webkit-text-fill-color": "transparent",
      "text-fill-color": "transparent",
      "background-size": "500% auto",
      "animation": `textShine ${speed} ease-in-out infinite alternate`
    });
  });
});
