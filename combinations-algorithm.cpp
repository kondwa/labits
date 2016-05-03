long int choose(int n,int r){
    //double ensures that precession is preserved
    //when dividing as int rounds up the dividend in C++
    double num,den,comb=1;
    if (n == 0 || n == r){
      return 1;
    }else{
      for (i=0; i<r || i<(n-r) ; i++){
        num = double(n-i);
        den = double(i+1);
        comb *= num/den;
      }
    }
  return comb;
}
