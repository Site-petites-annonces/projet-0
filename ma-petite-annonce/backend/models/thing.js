const mongoose = require('mongoose');

const thingSchema = mongoose.Schema({
    title: { type: String, required: true },
    description: { type: String, required: true },
    imageUrl: { type: String, required: true },
    email: { type: String, required: true },
    telephone: { type: String, required: true },
    userId: { type: String, required: false },
    price: { type: Number, required: true },
});

module.exports = mongoose.model('Thing', thingSchema);