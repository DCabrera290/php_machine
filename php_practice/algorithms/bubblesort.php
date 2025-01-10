<?php

$arr = [3, 1, 4, 1, 5, 9, 2, 6, 1, 3, 5, 8];

Function bubbleSort (array $arr):array {
    $n = count($arr);
    //
    $swapped;
    for ($i = 0; $i < $n -1; $i++) {
        $swapped = false;
    }



bubbleSort($arr);

function bubbleSort(arr) {
  let swapped;
  for (let i = 0; i < arr.length - 1; i++) {
    swapped = false;
    for (let j = 0; j < arr.length - i - 1; j++) {
      if (arr[j] > arr[j + 1]) {
        
        [arr[j], arr[j + 1]] = [arr[j + 1], arr[j]];
        swapped = true;
      }
    }
    if (!swapped) break;
  }
  return arr;
}
