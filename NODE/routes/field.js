var model = require('../models/field');

exports.list = function(req, res){
    new model.Fields().fetch().then(function (fields) {
        res.render('field/index', {fields: fields.toArray()});
    });
    // res.render('field/index', { title: 'Express' });
};

exports.create = function(req, res) {

}

exports.edit = function(req, res) {

}

exports.show = function(req, res) {
    new model.Field({id: req.params.id}).fetch().then(function (field) {
        res.json(field);
    });
}