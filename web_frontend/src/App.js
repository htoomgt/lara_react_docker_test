import React, { useState, useEffect, useCallback } from "react";
import axios from 'axios';

function App() {
  const [products, setProducts] = useState([]);

  const fetchProductHandler = useCallback(async () => {
    try {
      // const response = await fetch('http://localhost:8000')
        // .then((resp) => {
        //   console.log(resp);
        //   console.log(resp.json)
        //   console.log(resp.body)
        // });
        const response = await axios.get('http://localhost:8000/api/products');
        console.log(response);
        console.log(response.data)
      

      if(!response.status === 200){
        throw new Error('Something went wrong!');
      }


      const respData = response.data;
      let fetchedProducts = [];
      respData.map((data) => {
        fetchedProducts.push(data);
      })

      
      // console.log(fetchedProducts);

      setProducts(fetchedProducts);

      


    } catch (error) {
      console.log("Error to fetch data");
    }
  }, []);

  useEffect(() => {
    fetchProductHandler();
}, [fetchProductHandler]);

let productsToShow = products.map((product) => {
  return <li> {product.name}</li>;
});

  return (
    

    <div >
      <h1> The Available Products</h1>

        <ul>
          {productsToShow}
        </ul>
      

    </div>
  );
}

export default App;
