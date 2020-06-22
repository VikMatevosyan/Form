// Գրել ֆունկցիա, որը վերադարձնում է տողում գտնվող բառը՝ բացի fog տառերից։ Եթե տողը չի պարունակում fog տառերը,
//     վերադարձնել՝ "It's a clear day!"
// Օրինակներ
// clearFog("sky") ➞ "It's a clear day!"
// clearFog("fogfogfffoooofftreesggfoogfog") ➞ "trees"
// clearFog("fogFogFogffffooobirdsandthebeesGGGfogFog") ➞ "birdsandthebees"
// Նշումներ
// Բառերը չեն պարունակելու f, o կամ g տառերը
// Թաքնված բառերը միշտ փոքրատառերով են գրված

// function clearFog(str) {
//     for (let i = 0; i < str.length; i++) {
//         if (str.length.includes("fog")) {
//
//         }
//         console.log("da");
//     }
// }
// clearFog("fogfogfffoooofftreesggfoogfog");

// 2.Bugfix (կա պատրաստի կոդ, բայց ունի bug։ Պիտի գտնեք սխալը և ուղղեք)
// Գրել ֆունկցիա, որը վերադարձնում է true եթե երկու զանվածնեւը պարունակում է նույն տարրերը, և false` հակառակ դեպքում
// Խնդիրը լուծելու համար ձեր ընկերը գրել է հետևյալ կոդը
// Բայց, կոդը թեստավորելուց դուք տեսնում եք, որ մի բան այն չէ։ Կոդը աշխատացնելիս տեսնում ենք հետևյալ արդյունքը
// Փոփոխեք կոդը այնպես, որ այն ճիշտ համեմատի երկու զանգվածների հավասարությունը
// Օրինակներ
// checkEquals([1, 2], [1, 3]) ➞ false
// checkEquals([1, 2], [1, 2]) ➞ true
// checkEquals([4, 5, 6], [4, 5, 6]) ➞ true
// checkEquals([4, 7, 6], [4, 5, 6]) ➞ false


//
// function checkEquals(arr1, arr2) {
// if (arr1.length !== arr2.length) {
//     return false;
// }
//     for (let i = 0; i < arr1.length; i++) {
//         if (arr1[i] !== arr2[i]) {
//             return false
//         }
//     }
//     return true;
// }
// console.log (checkEquals([1, 2], [1, 2]));




