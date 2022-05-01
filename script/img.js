

function resize_img(img) {
	console.log(img)
	full_img = document.querySelector('#full_img');
	close_full_img = document.querySelector('#close_full_img');
	full_img.src = img.src;
	full_img.style.display = 'block';
	close_full_img.style.display = 'block';
}


function remove_full_img(full) {
	full_img.style.display = 'none'
	close_full_img.style.display = 'none'
}
document.querySelector('#close_full_img').onclick = () =>{
	full_img.style.display = 'none'
	close_full_img.style.display = 'none'
}