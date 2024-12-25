// import { Link } from '@inertiajs/react'; 
// export default function Index({ products }) {
//     return (
//         <>
//             <h1>Product Index</h1>
//             <div>
//                 <ul>
//                     {products.map((product) => (
//                         <li key={product.id}>
//                             <Link href={`/products/${product.id}`}>
//                                 {product.name} - ${product.price}
//                             </Link>
//                         </li>
//                     ))}
//                 </ul>
//             </div>

//         </>

//     );
// }



export default function Index({ products }) {
  return (
      <div className="bg-gradient-to-b from-blue-50 to-blue-100 min-h-screen">
          <div className="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-15 lg:max-w-7xl lg:px-8">
              <h2 className="text-4xl font-extrabold tracking-tight text-blue-600 text-center mb-10">
                  Products
              </h2>

              <div className="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                  {products.map((product) => (
                      <a
                          key={product.id}
                          href={`/products/${product.id}`}
                          className="group shadow-lg hover:shadow-xl transition-shadow duration-300 rounded-lg bg-white"
                      >
                          <img
                              src={product.image}
                              alt={product.name}
                              className="aspect-square w-full rounded-t-lg bg-gray-200 object-cover group-hover:opacity-90 xl:aspect-[7/8]"
                          />
                          <div className="p-4">
                              <h3 className="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                  {product.name}
                              </h3>
                              <p className="mt-2 text-lg font-semibold text-blue-800">
                                  ${product.price}
                              </p>
                          </div>
                      </a>
                  ))}
              </div>
          </div>
      </div>
  );
}


    