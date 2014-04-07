var baseModel = require('./baseModel');

var Field = baseModel.Model.extend({
    tableName: 'fields'
});

var Fields = baseModel.Collection.extend({
    model: Field
});

// usage new field()
module.exports = {
    Field: Field,
    Fields: Fields
};