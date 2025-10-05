
document.addEventListener('DOMContentLoaded',function() {
	const audios = document.querySelectorAll(".audio");

	audios.forEach( audio => {
		audio.addEventListener('play',function() {
			audios.forEach( otherAudio => {
				if (otherAudio !== this) {
					otherAudio.pause();
				}
			});
		});
	});
});
