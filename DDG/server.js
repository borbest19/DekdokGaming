const express = require('express')
const app = express()

app.set('view engine', 'twig')

const homeController = require('./controllers/home.controller')
const newsController = require('./controllers/news.controller')
const reviewController = require('./controllers/review.controller')
const topchartController = require('./controllers/topchart.controller')
const aboutusController = require('./controllers/aboutus.controller')
const reviewmasterController = require('./controllers/reviewmaster.controller')

app.get('/', homeController.index)
app.get('/home', homeController.index)
app.get('/news', newsController.index)
app.get('/review', reviewController.index)
app.get('/topchart', topchartController.index)
app.get('/aboutus', aboutusController.index)
app.get('/reviewmaster', reviewmasterController.index)

app.use('/assets', express.static(__dirname + '/static/assets', {
  maxAge: 86400000
}))

app.listen(8000, function(err) {
  console.log('Server is running on port 8000')
})
