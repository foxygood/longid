var uid = 19933;

document.write(longid(uid));

function longid(uid) {
 return (((Math.floor((Math.random() * 20) + 1)) * 4294967296) + uid);
}
