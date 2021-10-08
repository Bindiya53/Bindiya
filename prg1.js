//Create Directory
const fs=require('fs');
fs.mkdir("bindi", function(err) {
if (err) {
 console.log(err);
} else {
   console.log("File created successfully!");

}
});

//Remove Directory
fs.rmdir("bindi", function(err) {
if (err) {
 console.log(err);
} else {
   console.log("File removed successfully!");

}
});
//Write File
fs.writeFile("prg1.txt","welcome to dcs vnsgu", function(err) {
    if (err) {
      console.log(err);
    } else {
        console.log("file save");
    
    }
});


//Read File
fs.readFile("prg1.txt",'utf8',function(err,data){
    if(err){
        console.log(err);

    }else {
        console.log(data);
    }
})

//Delete File
fs.unlink("prg1.txt",function(err){
 if(err) throw err;
    console.log('file deleted!');
});


//Append data to file
fs.appendFile("prg1.txt",'Department Of Computer Science',function (err){
    if (err) throw err;
        console.log('saved');
    
});

//Update/Replace file wih new data
fs.writeFile("prg1.txt",'Department Of Computer Science,VNSGU',function (err){
    if (err) throw err;
        console.log('Replaced');
    
});


//Rename file
fs.rename("prg1.txt","prgg1.txt",function (err){
    if (err) throw err;
        console.log('File Renamed');
    
});




